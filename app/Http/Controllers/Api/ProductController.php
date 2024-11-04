<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /*** Fungsi untuk membaca list product ***/
    public function index()
    {
        $products = Product::orderBy('name')->paginate(50);
        return response()->json($products, 200);
    }

    /*** Fungsi untuk menyimpan product dari form API  // POST /api/products ***/
    public function store(Request $request)
    {
        $input = $request->validate([
            'code' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'selling_price' => 'required|numeric',
            'stock' => 'nullable|integer',
            'show_status' => 'required|boolean',
            'bpom_status' => 'required|boolean',
            'halal_status' => 'required|boolean',
            'image' => 'nullable|image|max:2048',
        ]);

        $product = new Product($input);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $product->image = $path;
        }

        $product->save();

        return response()->json($product, 201); // Status 201: Created
    }

    /*** Fungsi untuk membaca detail product di API  // GET /api/products/{id} ***/
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product, 200); // Status 200: OK
    }

    /*** Fungsi untuk mengupdate product dari form API  // PUT /api/products/{id} ***/
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $input = $request->validate([
            'code' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'selling_price' => 'required|numeric',
            'stock' => 'nullable|integer',
            'show_status' => 'required|boolean',
            'bpom_status' => 'required|boolean',
            'halal_status' => 'required|boolean',
            'image' => 'nullable|image|max:2048', // Validasi untuk file gambar
        ]);

        $product->fill($input);

        if ($request->hasFile('image')) {
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }
            $path = $request->file('image')->store('images', 'public');
            $product->image = $path;
        }

        $product->save();

        return response()->json($product, 200); // Status 200: OK
    }

    /*** Fungsi untuk menghapus product dari API  // DELETE /api/products/{id} ***/
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return response()->json(null, 204); // Status 204: No Content
    }

    /*** Fungsi untuk membaca list product untuk page Product ***/
    public function productPage(Request $request)
    {
        $products = Product::where('show_status', 1)->orderBy('name')->get();

        $perPage = 9;
        $page = $request->get('page', 1);
        $offset = ($page - 1) * $perPage;
        $productsOnPage = $products->slice($offset, $perPage);

        return response()->json([
            'products' => $productsOnPage->values(),
            'totalProducts' => $products->count(),
            'currentPage' => $page,
            'perPage' => $perPage,
        ], 200); // Status 200: OK
    }
}
