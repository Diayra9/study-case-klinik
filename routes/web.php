<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\TreatmentController;

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

Route::get('index', function () {
    return view('admin/index');
});

// LOGIN DAN SIGN IN
Route::get('/', [AuthController::class, 'showLoginForm']);
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('header', [AuthController::class, 'logout'])->name('logout');

Route::get('view-user', [AuthController::class, 'viewUser']);

Route::get('view-product', [ProductController::class, 'viewProduct']);
Route::post('save-product', [ProductController::class, 'saveProduct']);
Route::get('add-product', [ProductController::class, 'addProduct']);
Route::delete('delete-product/{id}', [ProductController::class, 'deleteProduct']);
Route::get('edit-product/{id}', [ProductController::class, 'editProduct']);
Route::post('update-product/{id}', [ProductController::class, 'updateProduct']);

Route::get('view-reservation', [ReservationController::class, 'viewReservation']);
Route::post('save-reservation', [ReservationController::class, 'saveReservation']);
Route::get('add-reservation', [ReservationController::class, 'addReservation']);
Route::delete('delete-reservation/{id}', [ReservationController::class, 'deleteReservation']);
Route::get('edit-reservation/{id}', [ReservationController::class, 'editReservation']);
Route::post('update-reservation/{id}', [ReservationController::class, 'updateReservation']);

Route::get('view-membership', [MembershipController::class, 'viewMembership']);
Route::post('save-membership', [MembershipController::class, 'saveMembership']);
Route::get('add-membership', [MembershipController::class, 'addMembership']);
Route::delete('delete-membership/{id}', [MembershipController::class, 'deleteMembership']);
Route::get('edit-membership/{id}', [MembershipController::class, 'editMembership']);
Route::post('update-membership/{id}', [MembershipController::class, 'updateMembership']);

Route::get('view-treatment', [TreatmentController::class, 'viewTreatment']);
Route::post('save-treatment', [TreatmentController::class, 'saveTreatment']);
Route::get('add-treatment', [TreatmentController::class, 'addTreatment']);
Route::delete('delete-treatment/{id}', [TreatmentController::class, 'deleteTreatment']);
Route::get('edit-treatment/{id}', [TreatmentController::class, 'editTreatment']);
Route::post('update-treatment/{id}', [TreatmentController::class, 'updateTreatment']);
