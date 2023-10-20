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
    return view('content/index');
});


Route::get('/login', function () {
    return view('content/login');
});

Route::get('/owner', function () {
    return view('owner/orderan');
});

Route::get('/owner/customize_layanan', function () {
    return view('owner/customize_layanan');
});

