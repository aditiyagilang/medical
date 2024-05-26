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

Route::get('/dashboard_admin', function () {
    return view('dashboard_admin');
});

Route::get('/landingpage_admin', function () {
    return view('landingpage_admin');
});

Route::get('pasien_lama', function () {
    return view('pasien_lama');
});

Route::post('/pasien', [PasienController::class, 'store'])->name('pasien.store');

// Uncommented login route
Route::get('/login', [PasienController::class, 'showLoginForm'])->name('login.form');
Route::post('/getpasien', [PasienController::class, 'pasien'])->name('pasien.index');
Route::post('/riwayat', [PasienController::class, 'storeRiwayat'])->name('riwayat.store');
