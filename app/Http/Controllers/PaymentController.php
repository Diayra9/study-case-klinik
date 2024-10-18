<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use App\Models\Reservation;
use App\Models\Treatment;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function payment(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id); // Use findOrFail for better error handling
        $treatments = Treatment::all();

        return view('admin.reservation.payment', compact('reservation', 'treatments'));
    }

    public function index2(Request $request)
    {
        return view('homepage.payment');
    }

    public function create(Request $request)
    {
        // Validasi input
        $request->validate([
            'price' => 'required|numeric',
            'email' => 'required|email',
            'payment_type' => 'required|in:credit_card,bca,bri,dana',
            'reservation_id' => 'required|exists:reservations,id'
        ]);

        $reservation = Reservation::findOrFail($request->reservation_id);
        $params = [
            'transaction_details' => [
                'transaction_id' => Str::uuid(),
                'gross_amount' => $reservation->treatment->price,
            ],
            'items' => [
                [
                    'id' => $reservation->treatment_id,
                    'price' => $reservation->treatment->price,
                    'quantity' => 1,
                    'name' => $reservation->treatment->name,
                ]
            ],
            'customer_details' => [
                'name' => $reservation->name,
                'email' => $request->email, // Ensure email is sent to Midtrans
            ],
            'enabled_payments' => ['credit_card', 'bca', 'bri', 'dana']
        ];

        $auth = base64_encode(env('MIDTRANS_SERVER_KEY'));

        // Membuat permintaan ke Midtrans
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => "Basic $auth",
        ])->post('https://app.sandbox.midtrans.com/snap/v1/transactions', $params);

        if ($response->failed()) {
            Log::error('Midtrans payment creation failed', ['response' => $response->body()]);
            return response()->json(['error' => 'Payment creation failed'], 500);
        }

        // Simpan data pembayaran ke database
        $payment = new Payment;
        $payment->transaction_id = $params['transaction_details']['transaction_id'];
        $payment->reservation_id = $request->reservation_id;
        $payment->amount = $reservation->treatment->price; // Ganti dengan amount
        $payment->status = 'pending';
        $payment->payment_type = $request->payment_type;
        $payment->save();

        dd($request->all());

        // Mengarahkan pengguna ke Midtrans untuk menyelesaikan pembayaran
        return response()->json($response->json());
    }

    public function webhook(Request $request)
    {
        $auth = base64_encode(env('MIDTRANS_SERVER_KEY'));

        // Meminta status transaksi dari Midtrans
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => "Basic $auth",
        ])->get("https://api.sandbox.midtrans.com/v2/{$request->transaction_id}/status");

        // Log webhook response for debugging
        Log::info('Webhook response', ['response' => $response->body()]);

        // Dekode respons
        $response = json_decode($response->body());

        // Cek di database
        $payment = Payment::where('transaction_id', $response->transaction_id)->firstOrFail();

        // Cek status pembayaran
        if ($payment->status === 'settlement' || $payment->status === 'capture') {
            return response()->json('Payment has already been processed');
        }

        switch ($response->transaction_status) {
            case 'capture':
                $payment->status = 'capture';
                break;
            case 'settlement':
                $payment->status = 'settlement';
                break;
            case 'pending':
                $payment->status = 'pending';
                break;
            case 'refund':
                $payment->status = 'refund';
                break;
            case 'expire':
                $payment->status = 'expire';
                break;
            case 'cancel':
                $payment->status = 'cancel';
                break;
            default:
                return response()->json('Unknown status', 400);
        }

        $payment->save();

        return response()->json('success');
    }
}
