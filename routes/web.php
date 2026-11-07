
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// Halaman utama
Route::get('/', function () {
    return view('home');
})->name('home');

// Halaman profil
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

// Halaman kontak
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// CRUD Mahasiswa
Route::resource('mahasiswa', MahasiswaController::class)
    ->except(['show']);
