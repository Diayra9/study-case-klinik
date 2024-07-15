<?php

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


Route::get('/', function () {
    return view('admin/index');
});

Route::get('view-membership', [MembershipController::class, 'viewMembership']);
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

Route::get('view-login', function () {
    return view('view-login');
});

Route::get('view-registrasi', function () {
    return view('view-registrasi');
});
