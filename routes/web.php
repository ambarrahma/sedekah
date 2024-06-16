<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DonasiController;


Route::get('/',[RegisterController::class,'index'])->name('sedekah.home');
Route::get('/form',[RegisterController::class,'form'])->name('sedekah.form');
Route::post('/formproses',[RegisterController::class,'store'])->name('sedekah.formproses');

Route::get('/',[DonasiController::class,'index'])->name('donasi.home');
Route::get('/donasi',[DonasiController::class,'donasi'])->name('donasi.form');
Route::post('/donasiproses',[DonasiController::class,'store'])->name('sedekah.donasiproses');
Route::post('/donasi-proses', [DonasiController::class, 'store'])->name('sedekah.donasiproses');
=======
use App\Http\Controllers\AuthController;


Route::get('/', [AuthController::class, 'index'])->name('home');
>>>>>>> aa620a060fb3187b95b6c85d08563dce2748cbe6

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::middleware('auth')->get('/verifikasi', function () {
    return view('verifikasi');
})->name('verifikasi');

Route::get('/homeverifikasi', function () {
    return view('homeverifikasi');
})->name('homeverifikasi');


<<<<<<< HEAD
// Route::get('/donasi', function () {
//     return view('donasi');
// })->name('donasi.form');

Route::get('/verifikasi', function () {
    return view('verifikasi');
})->name('akun');
=======
Route::get('/donasi', function () {
    return view('donasi');
})->name('donasi.form');
>>>>>>> aa620a060fb3187b95b6c85d08563dce2748cbe6

Route::get('/buatdonasi', function () {
    return view('buatdonasi');
})->name('buat.form');

Route::get('/campaign', function () {
    return view('campaign');
})->name('campaign.page');