<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin/index');
});

Route::get('view-product', [ProductController::class, 'viewProduct']);
Route::post('save-product', [ProductController::class, 'saveProduct']);
Route::get('add-product', [ProductController::class, 'addProduct']);
Route::delete('delete-product/{id}', [ProductController::class, 'deleteProduct']);
Route::get('edit-product/{id}', [ProductController::class, 'editProduct']);
Route::post('update-product/{id}', [ProductController::class, 'updateProduct']);

Route::get('view-login', function () {
    return view('view-login');
});

Route::get('view-registrasi', function () {
    return view('view-registrasi');
});
