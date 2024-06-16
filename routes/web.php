<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', [AuthController::class, 'index'])->name('home');

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


Route::get('/donasi', function () {
    return view('donasi');
})->name('donasi.form');

Route::get('/buatdonasi', function () {
    return view('buatdonasi');
})->name('buat.form');

Route::get('/campaign', function () {
    return view('campaign');
})->name('campaign.page');