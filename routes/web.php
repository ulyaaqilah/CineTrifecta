<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rute untuk halaman ganti (contoh)
Route::get('/ganti', function () {
    return view('film');
});

// Rute untuk registrasi
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/registeraksi', [RegisterController::class, 'registeraksi'])->name('registeraksi');

// Rute untuk login
Route::get('/login', [LoginController::class, 'loginview'])->name('login');
Route::post('/loginaksi', [LoginController::class, 'loginaksi'])->name('loginaksi');

// Rute untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk dashboard (dengan middleware 'auth')
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/introduction', [DashboardController::class, 'introduction'])->name('introduction');
Route::get('/select', [DashboardController::class, 'select'])->name('select');
Route::get('/InsertFilm', [DashboardController::class, 'InsertFilm'])->name('InsertFilm');
Route::get('/InsertRating', [DashboardController::class, 'InsertRating'])->name('InsertRating');



Route::post('/regenerate-token', [LoginController::class, 'regenerateToken'])->name('regenerate.token');




// Rute untuk pencarian film (dinonaktifkan untuk saat ini, aktifkan jika diperlukan)
// Route::get('/cariFilm', [MovieController::class, 'viewFilm']);
// Route::get('/searchMovie', [MovieController::class, 'searchByTitle']);
// Route::get('/searchLanguage', [MovieController::class, 'searchByLanguage']);
// Route::get('/searchGenre', [MovieController::class, 'searchByGenre']);

