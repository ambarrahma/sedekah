<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/',[RegisterController::class,'index'])->name('sedekah.home');
Route::get('/form',[RegisterController::class,'form'])->name('sedekah.form');
Route::post('/formproses',[RegisterController::class,'store'])->name('sedekah.formproses');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/donasi', function () {
    return view('donasi');
})->name('donasi.form');

Route::get('/verifikasi', function () {
    return view('verifikasi');
})->name('akun');

Route::get('/buatdonasi', function () {
    return view('buatdonasi');
})->name('buat.form');

Route::get('/campaign', function () {
    return view('campaign');
})->name('campaign.page');