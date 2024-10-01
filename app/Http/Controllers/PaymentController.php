<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use App\Models\Reservation;
use App\Models\Treatment;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function payment(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        $treatments = Treatment::all();

        return view('admin.reservation.payment', compact('reservation', 'treatments'));
    }

    // /*** Fungsi untuk membaca list payment dari form blade  /payments ***/
    // public function index(Request $request)
    // {
    //     $payments = Payment::with('reservation')->get(); // Pastikan untuk mengambil data reservation bersama reservation
    //     return view('admin.payment.view-payment', compact('payments'));
    // }
    public function index2(Request $request)
    {
        return view('homepage.payment');
    }
    
    // /*** Fungsi untuk menyimpan payment dari form blade  // POST /payments ***/
    // public function store(Request $request)
    // {
    //     $input = $request->input();
    //     $payment = new Payment();
    //     $payment->reservation_id =  $request->reservation_id;
    //     $payment->email =  $request->email;
    //     $payment->price = $request->price;
    //     $payment->payment_method = $request->payment_method;
    //     $payment->transaction_id = $request->transaction_id;
    //     $payment->status = $request->status;

    //     $payment->save();
    //     return redirect()->route('payments.index');
    // }

    // /*** Fungsi untuk mengedit list payment dari form blade  // GET /payments/{payment}/edit ***/
    // public function edit(Request $request, $id)
    // {
    //     $payment = Payment::find($id);
    //     $reservations = Reservation::where('payment_status', 0)
    //     ->orderBy('id')
    //     ->get();

    //     return view('admin.payment.edit-payment', compact('payment', 'reservations'));
    // }

    // /*** Fungsi untuk mengupdate payment dari form blade  // PUT /payments/{payment} ***/
    // public function update(Request $request, $id)
    // {
    //     $input = $request->input();
    //     $payment = Payment::find($id);

    //     $payment->reservation_id =  $request->reservation_id;
    //     $payment->email =  $request->email;
    //     $payment->price = $request->price;
    //     $payment->payment_method = $request->payment_method;
    //     $payment->status = $request->status;
    //     $payment->save();
    //     return redirect()->route('payments.index');
    // }

    // /*** Fungsi untuk menghapus list payment dari form blade ***/
    // public function destroy($id)
    // {
    //     $payment = Payment::find($id);
    //     $payment->delete();
    //     return redirect()->route('payments.index');
    // }

    public function create(Request $request)
    {
        $params = [
            'transaction_details' => [
                'transaction_id' => Str::uuid(),
                'gross_amount' => $request->price,
            ],
            'items_detail' => [
                [
                    'price' => $request->price,
                ]
            ],
            'customer_details' => [
                'email' => $request->email,
            ],
            'enabled_payments' => ['credit_card', 'bca_va', 'bri_va', 'dana']
        ];

        $auth = base64_encode(env('MIDTRANS_SERVER_KEY'));

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => "Basic $auth",
        ])->post('https://app.sandbox.midtrans.com/snap/v1/transactions', $params);

        $response = json_decode($response->body());

        // if (!$response->redirect_url) {
        //     return response()->json(['error' => 'Payment creation failed'], 500);
        // }

        $payment = new Payment;
        $payment->transaction_id = $params['transaction_details']['transaction_id'];
        $payment->status = 'pending';
        $payment->price = $request->price;
        $payment->email = $request->email;
        $payment->save();

        return response()->json($response);
    }

    public function webhook(Request $request)
    {
        $auth = base64_encode(env('MIDTRANS_SERVER_KEY'));

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => "Basic $auth",
        ])->get("https://api.sandbox.midtrans.com/v2/$request->transaction_id/status");

        $response = json_decode($response->body());

        //Check to db
        $payment = Payment::where('transaction_id',$response->transaction_id)->firstOrFail();

        if ($payment->status === 'settlement' || $payment->status === 'capture')
        {
            return response()->json('Payment has been already processed');  
        }

        if($response->transaction_status === 'capture'){
            $payment->status = 'capture';
        } else if ($response->transaction_status === 'settlement'){
            $payment->status = 'settlement';
        } else if ($response->transaction_status === 'pending'){
            $payment->status = 'pending';
        } else if ($response->transaction_status === 'refund') {
            $payment->status = 'refund';
        } else if ($response->transaction_status === 'expire') {
            $payment->status = 'expire';
        } else if ($response->transaction_status === 'cancel') {
            $payment->status = 'cancel';
        }

        $payment->save();

        return response()->json('success');
    }
}
