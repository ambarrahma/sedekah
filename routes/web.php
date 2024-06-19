<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GalangDanaController;

Route::get('/', [AuthController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/buat-galang-dana', [GalangDanaController::class, 'create'])->name('buat.form');
Route::post('/galang-dana', [GalangDanaController::class, 'store'])->name('galang_dana.store');
Route::get('/galang-dana', [GalangDanaController::class, 'index'])->name('galang_dana.index');
Route::get('/galang-dana/{id}/edit', [GalangDanaController::class, 'edit'])->name('galang_dana.edit');
Route::put('/galang-dana/{id}', [GalangDanaController::class, 'update'])->name('galang_dana.update');
Route::delete('/galang-dana/{id}', [GalangDanaController::class, 'destroy'])->name('galang_dana.destroy');



Route::middleware('auth')->get('/verifikasi', [GalangDanaController::class, 'index'])->name('verifikasi');

Route::get('/homeverifikasi', function () {
    return view('homeverifikasi');
})->name('homeverifikasi');

Route::get('/donasi', function () {
    return view('donasi');
})->name('donasi.form');

Route::get('/campaign', function () {
    return view('campaign');
})->name('campaign.page');
