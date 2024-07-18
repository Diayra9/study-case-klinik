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
        $input = $request->input();
        $reservation = new Reservation();
        $reservation->name =  $request->name;
        $reservation->date =  $request->date;
        $reservation->age = $request->age;
        $reservation->gender = $request->gender;
        $reservation->treatment_id =  $request->treatment_id;

        // Menyimpan file file_upload
        if ($request->hasFile('file_upload')) {
            $file_upload = $request->file('file_upload');
            $path = $file_upload->store('images', 'public');
            $reservation->file_upload = $path;
        }

        $reservation->save();
        return redirect('view-reservation');
    }

    /*** Fungsi untuk membaca list reservation dari form blade ***/
    public function viewReservation(Request $request)
    {
        $reservations = Reservation::get();
        return view('admin/view-reservation', compact('reservations'));
    }

    public function addReservation()
    {
        $treatments = Treatment::where('show_status', 1)
            ->orderBy('name')
            ->get();

        return view('admin/add-reservation', compact('treatments'));
        // return view('admin/add-reservation');
    }

    /*** Fungsi untuk menghapus list reservation dari form blade ***/
    public function deleteReservation(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        
        if ($reservation) {
            // Hapus file gambar dari storage
            if ($reservation->file_upload && Storage::disk('public')->exists($reservation->file_upload)) {
                Storage::disk('public')->delete($reservation->file_upload);
            }

            $reservation->delete();
        }

        return redirect('view-reservation');
    }

    /*** Fungsi untuk mengedit list reservation dari form blade ***/
    public function editReservation(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        $treatments = Treatment::where('show_status', 1)
            ->orderBy('name')
            ->get();

        return view('admin/edit-reservation', compact('reservation', 'treatments'));
    }

    /*** Fungsi untuk mengupdate product dari form blade ***/
    public function updateReservation(Request $request, $id)
    {
        $input = $request->input();
        $reservation = Reservation::find($id);

        if ($reservation) {
            $reservation->name = $request->name;
            $reservation->date = $request->date;
            $reservation->age = $request->age;
            $reservation->gender = $request->gender;
            $reservation->treatment_id = $request->treatment_id;

            if ($request->hasFile('file_upload')) {
                // Hapus gambar lama jika ada
                if ($reservation->file_upload && Storage::disk('public')->exists($reservation->file_upload)) {
                    Storage::disk('public')->delete($reservation->file_upload);
                }
    
                // Simpan gambar baru
                $imagePath = $request->file('file_upload')->store('images', 'public');
                $reservation->file_upload = $imagePath;
            }

            $reservation->save();
        }

        return redirect('view-reservation');
    }
}
