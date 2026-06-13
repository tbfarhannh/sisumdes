<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Public\LandingController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\RiwayatController;
use App\Http\Controllers\User\SuratController;

/* 
|─────────────────────────────────────────────────────────────────────────
|   PUBLIC ROUTES 
|─────────────────────────────────────────────────────────────────────────
*/
Route::get('/',            [LandingController::class, 'home'])->name('beranda');
Route::get('/profil-desa', [LandingController::class, 'profile'])->name('profil-desa');
Route::get('/berita',      [LandingController::class, 'news'])->name('berita');
Route::get('/kontak',      [LandingController::class, 'contact'])->name('kontak');

/* 
|─────────────────────────────────────────────────────────────────────────
|   GUEST ROUTES 
|─────────────────────────────────────────────────────────────────────────
*/
Route::middleware('guest')->group(function () {
    Route::get('/register',  [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login',     [LoginController::class, 'create'])->name('login');
    Route::post('/login',    [LoginController::class, 'store']);
});

// ─── Logout Route ──────────────────────────────────────────────────────
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout')->middleware('auth');

/* 
|─────────────────────────────────────────────────────────────────────────
|   USER ROUTES 
|─────────────────────────────────────────────────────────────────────────
*/
Route::middleware('auth')->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('pengajuan')->name('pengajuan.')->group(function () {
        Route::get('/',             [SuratController::class, 'create'])->name('create');
        Route::get('/usaha',        [SuratController::class, 'formUsaha'])->name('usaha');
        Route::post('/usaha',       [SuratController::class, 'storeUsaha'])->name('usaha.store');
        Route::get('/kehilangan',   [SuratController::class, 'formKehilangan'])->name('kehilangan');
        Route::post('/kehilangan',  [SuratController::class, 'storeKehilangan'])->name('kehilangan.store');
        Route::get('/tidak-mampu',  [SuratController::class, 'formTidakMampu'])->name('tidak-mampu');
        Route::post('/tidak-mampu', [SuratController::class, 'storeTidakMampu'])->name('tidak-mampu.store');
    });

    Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat.index');

    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/edit',   [ProfileController::class, 'edit'])->name('edit');
        Route::put('/update', [ProfileController::class, 'update'])->name('update');
    });
});
