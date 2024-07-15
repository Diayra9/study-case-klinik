<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /*** Fungsi untuk menyimpan product dari form blade ***/
    public function saveProduct(Request $request)
    {
        // Validasi input
        $request->validate([
            'code' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'selling_price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'show_status' => 'required|boolean',
            'bpom_status' => 'required|boolean',
            'halal_status' => 'required|boolean'
        ]);

        $product = new Product();

        // Menyimpan data produk
        $product->code = $request->code;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->selling_price = $request->selling_price;
        $product->stock = $request->stock;
        
        // Menyimpan file image
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $product->image = $path;
        }
        
        $product->show_status = $request->show_status;
        $product->bpom_status = $request->bpom_status;
        $product->halal_status = $request->halal_status;

        $product->save();
        return redirect('view-product');
    }

    /*** Fungsi untuk membaca list product dari form blade ***/
    public function viewProduct(Request $request)
    {
        $products = Product::get();
        return view('admin/view-product', compact('products'));
    }

    public function addProduct()
    {
        return view('admin/add-product');
    }

    /*** Fungsi untuk menghapus list product dari form blade ***/
    public function deleteProduct(Request $request, $id)
    {
        $product = Product::find($id);

        if ($product) {
            // Hapus file gambar dari storage
            if (Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            $product->delete();
        }
    }

    /*** Fungsi untuk mengedit list product dari form blade ***/
    public function editProduct(Request $request, $id)
    {
        $product = Product::find($id);
        return view('admin/edit-product', compact('product'));
    }

    /*** Fungsi untuk mengupdate product dari form blade ***/
    public function updateProduct(Request $request, $id)
    {
        $input = $request->input();
        $product = Product::find($id);
    
        if ($product) {
            $product->code = $request->code;
            $product->name = $request->name;
            $product->description = $request->description;
            $product->selling_price = $request->selling_price;
            $product->stock = $request->stock;
    
            if ($request->hasFile('image')) {
                // Hapus gambar lama jika ada
                if ($product->image && Storage::disk('public')->exists($product->image)) {
                    Storage::disk('public')->delete($product->image);
                }
    
                $imagePath = $request->file('image')->store('images', 'public');
                $product->image = $imagePath;
            }
    
            $product->show_status = $request->show_status;
            $product->bpom_status = $request->bpom_status;
            $product->halal_status = $request->halal_status;
    
            $product->save();
        }
    
        return redirect('view-product');
    }
}