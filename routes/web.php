<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogindanReg;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::controller(LogindanReg::class)->group(function(){
        Route::get('/login','login');
        Route::get('/registrasi','registrasi');
        Route::post('/registrasi/simpan','simpanRegistrasi')->name('Registrasi');
        Route::post('/login/simpan','simpanLogin')->name('login');
});


Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/price', function () {
    return view('price');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/contact', function () {
    return view('contact');
});

