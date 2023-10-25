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

Route::get('/home_user', function () {
    return view('content/index2');
});

Route::get('/home_owner', function () {
    return view('content/index3');
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

// raoute gideon

Route::get('/pilihLaundry', function () {
    return view('user/pilihLaundry');
});

Route::get('/pilihLaundryTest', function () {
    return view('user/pilihLaundryTest');
});

Route::get('/laundryPage', function () {
    return view('user/laundryPage');
});

Route::get('/pilihLayanan', function () {
    return view('user/pilihLayanan');
});

Route::get('/payment', function () {
    return view('user/payment');
});

Route::get('/paymentKiloan', function () {
    return view('user/paymentKiloan');
});

Route::get('/profile', function () {
    return view('user/profile');
});

Route::get('/wallet', function () {
    return view('user/wallet');
});
