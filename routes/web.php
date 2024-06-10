<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('home');
});
Route::get('/formsignup', function () {
    return view('formsignup');
})->name('sedekah.formsignup');

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/donasi', function () {
    return view('donasi');
})->name('donasi.form');

Route::get('/verifikasi', function () {
    return view('verifikasi');
})->name('akun');

Route::get('/buatdonasi', function () {
    return view('buatdonasi');
})->name('buat.form');

