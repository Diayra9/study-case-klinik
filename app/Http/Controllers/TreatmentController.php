<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TreatmentController extends Controller
{
    /*** Fungsi untuk menyimpan treatment dari form blade ***/
    public function saveTreatment(Request $request)
    {
        $input = $request->input();
        $treatment = new Treatment();
        $treatment->id =  $request->id;
        $treatment->name =  $request->name;
        $treatment->selling_price = $request->selling_price;
        $treatment->description =  $request->description;
        $treatment->show_status =  $request->show_status;
        // Menyimpan file image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $treatment->image = $path;
        }
        $treatment->save();
        return redirect('view-treatment');
    }

    /*** Fungsi untuk membaca list treatment dari form blade ***/
    public function viewTreatment(Request $request)
    {
        $treatments = Treatment::orderBy('name')->paginate(10); // Mengurutkan berdasarkan nama dan menggunakan pagination
        return view('admin.view-treatment', compact('treatments'));
    }

    /*** Fungsi untuk membaca file addTreatment ***/
    public function addTreatment()
    {
        return view('admin.add-treatment');
    }

    /*** Fungsi untuk menghapus list treatment dari form blade ***/
    public function deleteTreatment(Request $request, $id)
    {
        $treatment = Treatment::find($id);

        if ($treatment) {
            // Hapus file gambar dari storage
            if (Storage::disk('public')->exists($treatment->image)) {
                Storage::disk('public')->delete($treatment->image);
            }

            $treatment->delete();
        }
    }

    /*** Fungsi untuk mengedit list treatment dari form blade ***/
    public function editTreatment(Request $request, $id)
    {
        $treatment = Treatment::find($id);
        return view('admin.edit-treatment', compact('treatment'));
    }

    /*** Fungsi untuk mengupdate treatment dari form blade ***/
    public function updateTreatment(Request $request, $id)
    {
        $input = $request->input();
        $treatment = Treatment::find($id);

        if ($treatment) {
            $treatment->id = $request->id;
            $treatment->name = $request->name;
            $treatment->selling_price = $request->selling_price;
            $treatment->description = $request->description;

            if ($request->hasFile('image')) {
                // Hapus gambar lama jika ada
                if ($treatment->image && Storage::disk('public')->exists($treatment->image)) {
                    Storage::disk('public')->delete($treatment->image);
                }

                $imagePath = $request->file('image')->store('images', 'public');
                $treatment->image = $imagePath;
            }

            $treatment->show_status = $request->show_status;
            $treatment->save();
        }

        return redirect('view-treatment');
    }
}
