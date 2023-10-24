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
    return view('pilihLaundry');
});

Route::get('/pilihLaundry', function () {
    return view('pilihLaundry');
});

Route::get('/pilihLaundryTest', function () {
    return view('pilihLaundryTest');
});

Route::get('/laundryPage', function () {
    return view('laundryPage');
});

Route::get('/pilihLayanan', function () {
    return view('pilihLayanan');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/paymentKiloan', function () {
    return view('paymentKiloan');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/wallet', function () {
    return view('wallet');
});
