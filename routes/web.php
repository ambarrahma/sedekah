<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/',[RegisterController::class,'index'])->name('sedekah.home');
Route::get('/form',[RegisterController::class,'form'])->name('sedekah.form');
Route::post('/formproses',[RegisterController::class,'store'])->name('sedekah.formproses');

Route::get('/',[DonasiController::class,'index'])->name('donasi.home');
Route::get('/donasi',[DonasiController::class,'donasi'])->name('donasi.form');
Route::post('/donasiproses',[DonasiController::class,'store'])->name('sedekah.donasiproses');

// Route::get('/donasi', [DonasiController::class, 'donasi'])->name('donasi');
Route::post('/donasi/store', [DonasiController::class, 'store'])->name('home');
Route::get('/donasi/show', [DonasiController::class, 'show'])->name('donasi.show');

Route::get('/' , [AuthController::class, 'index'])->name('home');
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


// Route::get('/donasi', function () {
//     return view('donasi');
// })->name('donasi.form');

Route::get('/verifikasi', function () {
    return view('verifikasi');
})->name('akun');

Route::get('/buatdonasi', function () {
    return view('buatdonasi');
})->name('buat.form');

Route::get('/campaign', function () {
    return view('campaign');
})->name('campaign.page');