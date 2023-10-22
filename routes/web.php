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
    return view('loginPage');
});

Route::get('/registerPage', function () {
    return view('registerPage');
});

Route::get('/forgotPasswordPage', function () {
    return view('forgotPasswordPage');
});

Route::get('/showDataUserPage', function () {
    return view('showDataUserPage');
});

Route::get('/createUserPage', function () {
    return view('createUserPage');
});

Route::get('/verifikasiOwnerPage', function () {
    return view('verifikasiOwnerPage');
});

Route::get('/editUserPage', function () {
    return view('editUserPage');
});