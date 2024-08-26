<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /*** Fungsi untuk membaca list product dari form blade  /products ***/
    public function index()
    {
        $products = Product::orderBy('name')->paginate(50);
        return view('admin.product.view-product', compact('products'));
    }

    /*** Fungsi untuk membaca file addProduct  /products/create ***/
    public function create()
    {
        return view('admin.product.add-product');
    }

    /*** Fungsi untuk menyimpan product dari form blade  // POST /products ***/
    public function store(Request $request)
    {
        $input = $request->input();
        $product = new Product();

        // Saving product data
        $product->code = $request->code;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->selling_price = $request->selling_price;
        $product->stock = $request->stock;

        // Saving image file
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $product->image = $path;
        }

        $product->show_status = $request->show_status;
        $product->bpom_status = $request->bpom_status;
        $product->halal_status = $request->halal_status;

        $product->save();
        return redirect()->route('products.index');
    }
    
    /*** Fungsi untuk mengedit list product dari form blade  // GET /products/{product}/edit ***/
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit-product', compact('product'));
    }

    /*** Fungsi untuk mengupdate product dari form blade  // PUT /products/{product} ***/
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->code = $request->code;
            $product->name = $request->name;
            $product->description = $request->description;
            $product->selling_price = $request->selling_price;
            $product->stock = $request->stock;

            if ($request->hasFile('image')) {
                // Delete old image if exists
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
        
        return redirect()->route('products.index');
    }
    
    /*** Fungsi untuk menghapus list product dari form blade  // DELETE /products/{product} ***/
    public function destroy($id)
    {
        $product = Product::find($id); 
        if ($product) {
            // Delete image from storage
            if (Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }
            
            $product->delete();
        }
        return redirect()->route('products.index');
    }
    
    /*** Fungsi untuk membaca list detail product di Page Product  // GET /products/{product} ***/
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('homepage.show-product', compact('product'));
    }

    /*** Fungsi untuk membaca list product untuk page Product ***/
    public function productPage(Request $request)
    {
        $products = Product::where('show_status', 1)
            ->orderBy('name')
            ->get(); 

        $perPage = 9;
        $page = $request->get('page', 1); 
        $offset = ($page - 1) * $perPage; 
        $productsOnPage = $products->slice($offset, $perPage); 

        return view('homepage.display-product', [
            'products' => $productsOnPage,
            'totalProducts' => $products->count(),
            'currentPage' => $page,
            'perPage' => $perPage,
        ]);
    }
}
