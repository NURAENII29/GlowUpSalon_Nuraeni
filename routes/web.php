<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogindanReg;
use App\Http\Controllers\BeautySalon;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', [BeautySalon::class,'home'])->middleware('auth');
Route::get('/service', [BeautySalon::class,'service'])->middleware('auth');
Route::get('/pages/team', [BeautySalon::class,'team'])->middleware('auth'); 
Route::get('/profil', [BeautySalon::class,'profilPekerjaSalon'])->middleware('auth');
Route::post('/profil/simpan', [BeautySalon::class,'profilSimpan'])->name('profil');

Route::controller(LogindanReg::class)->group(function(){
        Route::get('/login','login')->name('login')->middleware('guest');
        Route::get('/registrasi','registrasi')->middleware('guest');
        Route::post('/registrasi/simpan','simpanRegistrasi')->name('Registrasi');
        Route::post('/login/simpan','simpanLogin')->name('loginsimpan');
});


Route::get('/about', function () {
    return view('about');
});
// Route::get('/service', function () {
//     return view('service');
// });
Route::get('/price', function () {
    return view('price');
});
// Route::get('/team', function () {
//     return view('team');
// });
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/contact', function () {
    return view('contact');
});

