<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\SuratController;
use App\Http\Controllers\User\RiwayatController;
use Illuminate\Support\Facades\Route;

// Halaman publik
Route::get('/', fn() => view('beranda'))->name('beranda');
Route::get('/profil-desa', fn() => view('profil-desa'))->name('profil-desa');
Route::get('/berita', fn() => view('berita'))->name('berita');
Route::get('/kontak', fn() => view('kontak'))->name('kontak');

// Guest routes
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});

// Logout (bisa diakses user yang login)
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout')->middleware('auth');

// User routes
Route::middleware('auth')->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    // Pengajuan Surat
    Route::get('/pengajuan', [SuratController::class, 'create'])->name('pengajuan.create');
    Route::get('/pengajuan/usaha', [SuratController::class, 'formUsaha'])->name('pengajuan.usaha');
    Route::post('/pengajuan/usaha', [SuratController::class, 'storeUsaha']);
    Route::get('/pengajuan/kehilangan', [SuratController::class, 'formKehilangan'])->name('pengajuan.kehilangan');
    Route::post('/pengajuan/kehilangan', [SuratController::class, 'storeKehilangan']);
    Route::get('/pengajuan/tidak-mampu', [SuratController::class, 'formTidakMampu'])->name('pengajuan.tidak-mampu');
    Route::post('/pengajuan/tidak-mampu', [SuratController::class, 'storeTidakMampu']);

    // Riwayat
    Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat.index');
});
