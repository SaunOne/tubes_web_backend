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

Route::get('/registerPage', function () {
    return view('admin/registerPage');
});

Route::get('/login', function () {
    return view('admin/loginPage');
});

Route::get('/owner', function () {
    return view('owner/show/show_order');
});

Route::get('/owner/customize_layanan', function () {
    return view('owner/customize_layanan');
});

Route::get('/forgotPasswordPage', function () {
    return view('admin/forgotPasswordPage');
});

Route::get('/owner', function () {
    return view('owner/show/show_order');
});

Route::get('/showDataUserPage', function () {
    return view('admin/showDataUserPage');
});

Route::get('/createUserPage', function () {
    return view('admin/createUserPage');
});

Route::get('/verifikasiOwnerPage', function () {
    return view('admin/verifikasiOwnerPage');
});

Route::get('/editUserPage', function () {
    return view('admin/editUserPage');
});