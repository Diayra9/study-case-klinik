<?php

use App\Http\Controllers\Api\MembershipController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ReservationController;
use App\Http\Controllers\Api\TreatmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('products', ProductController::class);
Route::apiResource('treatments', TreatmentController::class);
// Route::apiResource('memberships', MembershipController::class);
Route::post('/membership/register', [MembershipController::class, 'storeUser']);
Route::post('/reservation/register', [ReservationController::class, 'storeUser']);