<?php
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\UserController;
use App\Models\Booking;
use App\Models\Pasien;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/daftar_pasien', function () {
    return view('daftar_pasien');
});

// Route::get('/doctor', [DokterController::class, 'index'])->name('doctor.index');

// Route::get('/doctor_detail', function () {
//     return view('doctor_detail');
// });



Route::get('/landingpage_admin', function () {
    return view('landingpage_admin');
});

Route::get('pasien_lama', function () {
    return view('pasien_lama');
});

Route::get('/layanan', [PasienController::class, 'layanan'])->name('layanan');

Route::get('/daftar_pasien', function () {
    return view('daftar_pasien');
});
Route::get('/logins', function () {
    return view('login');
});
Route::post('/pasien', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/dokters/{layanan}', [DokterController::class, 'index']);
Route::get('/doctor_detail/{id_doctor}', [BookingController::class, 'detail'])->name('doctor.detail');
// Uncommented login route
Route::get('/signin', [UserController::class, 'showLoginForm'])->name('login.form');
Route::post('/getpasien', [PasienController::class, 'pasien'])->name('pasien.index');
Route::post('/riwayat', [PasienController::class, 'storeRiwayat'])->name('riwayat.store');

Route::post('/signin', [UserController::class, 'login'])->name('login.index');
Route::get('/dashboard_admin', [PasienController::class, 'index'])->name('dashboard_admin');
Route::get('/export-to-pdf', 'App\Http\Controllers\PasienController@exportToPdf')->name('export.pdf');

Route::get('/riwayat/{id}', [PasienController::class, 'riwayat']);
Route::delete('/delete/{id}', [PasienController::class, 'delete'])->name('delete.pasien');

// Route::get('/download-pdf', [BookingController::class, 'generatePdf']);

Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

