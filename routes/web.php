<?php

use Illuminate\Support\Facades\Route;

// Halaman publik
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/profil-desa', function () {
    return view('profil-desa');
})->name('profil-desa');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
