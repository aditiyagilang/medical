<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});
Route::get('/daftar_pasien', function () {
    return view('daftar_pasien');
});
Route::get('/doctor', [DokterController::class, 'index'])->name('doctor.index');
Route::get('/doctor_detail', function () {
    return view('doctor_detail');
});
Route::get('/landingpage', function () {
    return view('landingpage');
});
Route::get('/landingpage_admin', function () {
    return view('landingpage_admin');
});
Route::get('login', function () {
    return view('login');
});
