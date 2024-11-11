<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TreatmentController;

// ADMIN DASHBOARD
Route::get('/adminControl', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/index', [ChartController::class, 'Report']);

<<<<<<< HEAD
    Route::get('/contact', function () { return view('admin.morePage.contact'); });
    Route::get('/faq', function () { return view('admin.morePage.faq'); });
    Route::get('/gallery', function () { return view('admin.morePage.gallery'); });
=======
    Route::get('/contact', function () {
        return view('admin.contact');
    });
    Route::get('/calender', function () {
        return view('admin.calender');
    });
    Route::get('/gallery', function () {
        return view('admin.gallery');
    });
    Route::get('/information', [InfoController::class, 'getCounts']);
>>>>>>> main

    Route::get('/information', [InfoController::class, 'getCounts']);
    Route::get('/calender', [CalenderController::class, 'showCalendar']);
    Route::get('/view-user', [AuthController::class, 'viewUser']);
    Route::delete('/delete-user/{id}', [AuthController::class, 'deleteUser']);

    Route::resource('/products', ProductController::class);
    Route::resource('/treatments', TreatmentController::class);
    Route::resource('/reservations', ReservationController::class);
    Route::resource('/memberships', MembershipController::class);
});


// LANDING PAGE & OTHER
<<<<<<< HEAD
Route::get('/', function () { return view('homepage.index'); });
Route::get('/about-us', function () { return view('homepage.about-us'); });
Route::get('/Promo', function () { return view('homepage.promo'); });
=======
Route::get('/BeautyClinic', function () {
    return view('homepage.index');
});
Route::get('/about-us', function () {
    return view('homepage.about-us');
});
Route::get('/Promo', function () {
    return view('homepage.promo');
});
>>>>>>> main

Route::get('/display-treatment', [TreatmentController::class, 'treatmentPage']);
Route::get('/display-product', [ProductController::class, 'productPage']);
Route::get('/show-product/{id}', [ProductController::class, 'show'])->name('showProduct');

Route::post('/save-appointment', [ReservationController::class, 'storeUser']);
Route::get('/add-appointment', [ReservationController::class, 'addAppointment'])->name('add-appointment');
Route::post('/save-membership', [MembershipController::class, 'storeUser']);
Route::get('/add-new-membership', [MembershipController::class, 'addNewMembership'])->name('add-new-membership');


// PAYMENT GATEWAY
Route::get('/payment-index', [PaymentController::class, 'index2']);
Route::post('/webhooks/midtrans', [PaymentController::class, 'webhook']);
Route::post('/payment/{id}', [PaymentController::class, 'create'])->name('payment.create');
Route::get('/payment/{id}', [PaymentController::class, 'payment']);
// Route::resource('/payments', PaymentController::class);