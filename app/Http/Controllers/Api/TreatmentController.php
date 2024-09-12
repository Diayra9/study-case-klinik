<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TreatmentController extends Controller
{
    /*** Fungsi untuk membaca list treatment dari API  // GET /api/treatments ***/
    public function index()
    {
        $treatments = Treatment::orderBy('name')->paginate(50);
        return response()->json($treatments, 200); // Status 200: OK
    }

    /*** Fungsi untuk menyimpan treatment dari API  // POST /api/treatments ***/
    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|string|max:255',
            'selling_price' => 'required|numeric',
            'description' => 'nullable|string',
            'show_status' => 'required|boolean',
            'image' => 'nullable|image|max:2048', // Validasi untuk file gambar
        ]);

        $treatment = new Treatment($input);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $treatment->image = $path;
        }

        $treatment->save();

        return response()->json($treatment, 201); // Status 201: Created
    }

    /*** Fungsi untuk membaca detail treatment dari API  // GET /api/treatments/{id} ***/
    public function show($id)
    {
        $treatment = Treatment::findOrFail($id);

        return response()->json($treatment, 200); // Status 200: OK
    }

    /*** Fungsi untuk mengupdate treatment dari API  // PUT /api/treatments/{id} ***/
    public function update(Request $request, $id)
    {
        $treatment = Treatment::findOrFail($id);

        $input = $request->validate([
            'name' => 'required|string|max:255',
            'selling_price' => 'required|numeric',
            'description' => 'nullable|string',
            'show_status' => 'required|boolean',
            'image' => 'nullable|image|max:2048',
        ]);

        $treatment->fill($input);

        if ($request->hasFile('image')) {
            if ($treatment->image && Storage::disk('public')->exists($treatment->image)) {
                Storage::disk('public')->delete($treatment->image);
            }
            $path = $request->file('image')->store('images', 'public');
            $treatment->image = $path;
        }

        $treatment->save();

        return response()->json($treatment, 200); // Status 200: OK
    }

    /*** Fungsi untuk menghapus treatment dari API  // DELETE /api/treatments/{id} ***/
    public function destroy($id)
    {
        $treatment = Treatment::findOrFail($id);

        if ($treatment->image && Storage::disk('public')->exists($treatment->image)) {
            Storage::disk('public')->delete($treatment->image);
        }

        $treatment->delete();

        return response()->json(null, 204); // Status 204: No Content
    }

    /*** Fungsi untuk membaca list treatment untuk halaman Treatment // GET /api/treatments/page ***/
    public function treatmentPage(Request $request)
    {
        $treatments = Treatment::where('show_status', 1)->orderBy('name')->get();

        $perPage = 9;
        $page = $request->get('page', 1);
        $offset = ($page - 1) * $perPage;
        $treatmentsOnPage = $treatments->slice($offset, $perPage);

        return response()->json([
            'treatments' => $treatmentsOnPage->values(),
            'totalTreatments' => $treatments->count(),
            'currentPage' => $page,
            'perPage' => $perPage,
        ], 200); // Status 200: OK
    }
}
