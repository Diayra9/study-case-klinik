<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function showPaymentPage(Request $request)
    {
        // Midtrans configuration
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = false; // Set to true for production environment
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Find the reservation by reservation_id from the request
        $reservation = Reservation::with('treatment')->find($request->reservation_id);

        if (!$reservation) {
            return redirect()->back()->with('error', 'Reservation not found');
        }

        // Prepare transaction details
        $transaction_details = [
            'order_id' => uniqid(),
            'gross_amount' => $reservation->treatment->price, // Assuming treatment price is stored in the treatment model
        ];

        // Prepare customer details (name, phone, doctor, location)
        $customer_details = [
            'name' => $reservation->name,
            'phone' => $reservation->phone_number,
            'doctor' => $reservation->doctor, // Assuming doctor relationship in the reservation model
            'location' => $reservation->location,
        ];

        $params = [
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error generating payment token: ' . $e->getMessage());
        }

        // Return the payment page view
        return view('homepage.payment', compact('snapToken', 'reservation'));
    }

    public function processPayment(Request $request)
    {
        // Validation
        $request->validate([
            'reservation_id' => 'required|exists:reservations,id',
            'payment_method' => 'required|string',
            'snapToken' => 'required|string',
        ]);

        // Find reservation
        $reservation = Reservation::find($request->reservation_id);

        if (!$reservation) {
            return redirect()->back()->with('error', 'Reservation not found');
        }

        // Create payment record
        $payment = Payment::create([
            'reservation_id' => $reservation->id,
            'amount' => $reservation->treatment->price,
            'payment_method' => $request->payment_method,
            'transaction_id' => uniqid(),
            'status' => 0, // Pending
        ]);

        return redirect()->route('payment.success')->with('success', 'Payment processed successfully');
    }

    public function notificationHandler(Request $request)
    {
        // Validate Midtrans signature
        $serverKey = env('MIDTRANS_SERVER_KEY');
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($hashed != $request->signature_key) {
            return response(['message' => 'Invalid signature'], 403);
        }

        $payment = Payment::where('transaction_id', $request->order_id)->first();

        if (!$payment) {
            return response(['message' => 'Transaction not found'], 404);
        }

        // Update payment status
        switch ($request->transaction_status) {
            case 'settlement':
                $payment->status = 1; // Success
                break;
            case 'pending':
                $payment->status = 0; // Pending
                break;
            case 'deny':
            case 'expire':
            case 'cancel':
                $payment->status = 2; // Failed
                break;
        }

        $payment->payment_gateway_response = json_encode($request->all());
        $payment->save();

        return response(['message' => 'Payment status updated'], 200);
    }
}
