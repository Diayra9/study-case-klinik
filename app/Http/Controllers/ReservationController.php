<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ReservationController extends Controller
{
    /*** Fungsi untuk membaca list reservation dari form blade  /reservations ***/
    public function index(Request $request)
    {
        $reservations = Reservation::with('treatment')->paginate(10);
        foreach ($reservations as $reservation) {
            if (Carbon::parse($reservation->date)->isPast() && $reservation->status != 3) {
                $reservation->status = 2;
                $reservation->save();
            }
        }
        return view('admin.reservation.view-reservation', compact('reservations'));
    }

    /*** Fungsi untuk membaca file addReservation  /reservations/create ***/
    public function create()
    {
        $treatments = Treatment::where('show_status', 1)
            ->orderBy('name')
            ->get();

        return view('admin.reservation.add-reservation', compact('treatments'));
    }

    /*** Fungsi untuk menyimpan reservation dari form blade  // POST /reservations ***/
    public function store(Request $request)
    {
        $input = $request->input();
        $reservation = new Reservation();
        $reservation->name =  $request->name;
        $reservation->date =  $request->date;
        $reservation->age = $request->age;
        $reservation->gender = $request->gender;
        $reservation->phone_number = $request->phone_number;
        $reservation->status = $request->status;
        $reservation->treatment_id =  $request->treatment_id;
        $reservation->doctor =  $request->doctor;
        $reservation->location =  $request->location;
        $reservation->payment_status =  $request->payment_status;

        if (Carbon::parse($reservation->date)->isPast() && $reservation->status != 3) {
            $reservation->status = 2;
        }

        $reservation->save();
        return redirect()->route('reservations.index');
    }

    /*** Fungsi untuk mengedit list reservation dari form blade  // GET /reservations/{reservation}/edit ***/
    public function edit(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        $treatments = Treatment::where('show_status', 1)
            ->orderBy('name')
            ->get();

        return view('admin.reservation.edit-reservation', compact('reservation', 'treatments'));
    }

    /*** Fungsi untuk mengupdate reservation dari form blade  // PUT /reservations/{reservation} ***/
    public function update(Request $request, $id)
    {
        $input = $request->input();
        $reservation = Reservation::find($id);

        $reservation->name = $request->name;
        $reservation->date = $request->date;
        $reservation->age = $request->age;
        $reservation->gender = $request->gender;
        $reservation->phone_number = $request->phone_number;
        $reservation->status = $request->status;
        $reservation->treatment_id = $request->treatment_id;
        $reservation->doctor =  $request->doctor;
        $reservation->location =  $request->location;
        $reservation->payment_status =  $request->payment_status;

        if (Carbon::parse($reservation->date)->isPast() && $reservation->status != 3) {
            $reservation->status = 2;
        }

        $reservation->save();
        return redirect()->route('reservations.index');
    }

    /*** Fungsi untuk menghapus list reservation dari form blade ***/
    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect()->route('reservations.index');
    }

    /*** Fungsi untuk membaca page Appointment/Reservation ***/
    public function addAppointment()
    {
        $treatments = Treatment::where('show_status', 1)
            ->orderBy('name')
            ->get();

        return view('homepage.appointment', compact('treatments'));
    }

    /*** Fungsi untuk menyimpan reservation dari page reservation homepage ***/
    public function storeUser(Request $request)
    {
        $input = $request->input();
        $reservation = new Reservation();
        $reservation->name =  $request->name;
        $reservation->date =  $request->date;
        $reservation->age = $request->age;
        $reservation->gender = $request->gender;
        $reservation->phone_number = $request->phone_number;
        $reservation->status = $request->status;
        $reservation->treatment_id =  $request->treatment_id;
        $reservation->doctor =  $request->doctor;
        $reservation->location =  $request->location;
        $reservation->payment_status =  $request->payment_status;

        $reservation->save();
        // return redirect('payments.index');
        return back()->with('success', 'Appointment saved successfully!');
    }
}
