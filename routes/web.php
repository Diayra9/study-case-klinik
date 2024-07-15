<?php

use App\Http\Controllers\ReservationController;
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

Route::get('view-reservation', [ReservationController::class, 'viewReservation']);
Route::post('save-reservation', [ReservationController::class, 'saveReservation']);
Route::get('add-reservation', [ReservationController::class, 'addReservation']);
Route::delete('delete-reservation/{id}', [ReservationController::class, 'deleteReservation']);
Route::get('edit-reservation/{id}', [ReservationController::class, 'editReservation']);
Route::post('update-reservation/{id}', [ReservationController::class, 'updateReservation']);
