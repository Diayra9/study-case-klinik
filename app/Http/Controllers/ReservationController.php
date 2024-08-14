<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReservationController extends Controller
{
    /*** Fungsi untuk menyimpan reservation dari form blade ***/
    public function saveReservation(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'age' => 'required|numeric',
            'gender' => 'required|string|max:255',
            'phone_number' => 'required|numeric',
            'status' => 'nullable|string',
            'treatment_id' => 'required|numeric',
            'doctor' => 'nullable|string|max:255',
            'location' => 'required|string|max:255',
        ]);

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
        $reservation->save();

        return back()->with('success', 'Appointment saved successfully!');
    }

    /*** Fungsi untuk membaca list reservation dari form blade ***/
    public function viewReservation(Request $request)
    {
        $reservations = Reservation::with('treatment')->get(); // Pastikan untuk mengambil data treatment bersama reservation

        return view('admin.reservation.view-reservation', compact('reservations'));
    }

    /*** Fungsi untuk membaca file addReservation ***/
    public function addReservation()
    {
        $treatments = Treatment::where('show_status', 1)
            ->orderBy('name')
            ->get();

        return view('admin.reservation.add-reservation', compact('treatments'));
    }
    public function addAppointment()
    {
        $treatments = Treatment::where('show_status', 1)
            ->orderBy('name')
            ->get();

        return view('appointment', compact('treatments'));
    }

    /*** Fungsi untuk menghapus list reservation dari form blade ***/
    public function deleteReservation(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect('view-reservation');
    }

    /*** Fungsi untuk mengedit list reservation dari form blade ***/
    public function editReservation(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        $treatments = Treatment::where('show_status', 1)
            ->orderBy('name')
            ->get();

        return view('admin.reservation.edit-reservation', compact('reservation', 'treatments'));
    }

    /*** Fungsi untuk mengupdate product dari form blade ***/
    public function updateReservation(Request $request, $id)
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
        $reservation->save();
        return redirect('view-reservation');
    }
}
