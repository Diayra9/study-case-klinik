<?php

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
    return view('view-login');
});

Route::get('view-registrasi', function () {
    return view('view-registrasi');
});

Route::get('index', function () {
    return view('admin/index');
});

Route::get('trial', function () {
    return view('admin/trial');
});
