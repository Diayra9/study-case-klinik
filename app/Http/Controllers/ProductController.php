<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /*** Fungsi untuk menyimpan product dari form blade ***/
    public function saveProduct(Request $request)
    {
        $input = $request->input();
        $product = new Product();
        $product->code =  $request->code;
        $product->name =  $request->name;
        $product->description =  $request->description;
        $product->selling_price = $request->selling_price;
        $product->stock = $request->stock;
        $product->image =  $request->image;
        $product->show_status =  $request->show_status;
        $product->bpom_status =  $request->bpom_status;
        $product->halal_status =  $request->halal_status;

        $product->save();
        return redirect('admin/view-product');
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
        $product->delete();
        return redirect('admin/view-product');
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

        $product->code =  $request->code;
        $product->name =  $request->name;
        $product->description =  $request->description;
        $product->selling_price = $request->selling_price;
        $product->stock = $request->stock;
        $product->image =  $request->image;
        $product->show_status =  $request->show_status;
        $product->bpom_status =  $request->bpom_status;
        $product->halal_status =  $request->halal_status;

        $product->save();
        return redirect('admin/view-product');
    }
}