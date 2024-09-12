<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TreatmentController;

// ADMIN DASHBOARD
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('index', function () {
        return view('admin.index');
    });
    Route::get('view-user', [AuthController::class, 'viewUser']);
    Route::delete('delete-user/{id}', [AuthController::class, 'deleteUser']);

    Route::resource('products', ProductController::class);
    Route::resource('treatments', TreatmentController::class);
    Route::resource('reservations', ReservationController::class);
    Route::resource('memberships', MembershipController::class);
});

// LANDING PAGE & OTHER
Route::get('BeautyClinic', function () {
    return view('homepage.index');
});
Route::get('about-us', function () {
    return view('homepage.about-us');
});
Route::get('Promo', function () {
    return view('homepage.promo');
});

Route::get('display-treatment', [TreatmentController::class, 'treatmentPage']);
Route::get('display-product', [ProductController::class, 'productPage']);
Route::get('show-product/{id}', [ProductController::class, 'show'])->name('showProduct');

Route::post('save-appointment', [ReservationController::class, 'storeUser']);
Route::get('add-appointment', [ReservationController::class, 'addAppointment'])->name('add-appointment');

Route::post('save-membership', [MembershipController::class, 'storeUser']);
Route::get('add-new-membership', [MembershipController::class, 'addNewMembership'])->name('add-new-membership');


// Payment Gateway
Route::get('/payment', [PaymentController::class, 'showPaymentPage'])->name('payment.page');
Route::post('/process-payment', [PaymentController::class, 'processPayment'])->name('payment.process');
Route::post('/midtrans-notification', [PaymentController::class, 'notificationHandler'])->name('midtrans.notification');

// Route untuk menampilkan halaman kalender
Route::get('calendar', [CalendarController::class, 'index']);
Route::get('calendar/reservations', [CalendarController::class, 'getReservationsForCalendar'])->name('calendar.getReservationsForCalendar');
Route::post('calendar/reservations', [CalendarController::class, 'store'])->name('calendar.store');
