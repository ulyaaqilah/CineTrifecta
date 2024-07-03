<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
// use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/cariFilm', [MovieController::class, 'viewFilm']);
// return view('film');


// Route::get('/searchMovie', [MovieController::class, 'searchByTitle']);

// Route::get('/searchLanguage', [MovieController::class, 'searchByLanguage']);

// Route::get('/searchGenre', [MovieController::class, 'searchByGenre']);

Route::middleware('auth.apikey')->group(function () {
    Route::get('/searchMovie', [MovieController::class, 'searchByTitle']);
    Route::get('/searchLanguage', [MovieController::class, 'searchByLanguage']);
    Route::get('/searchGenre', [MovieController::class, 'searchByGenre']);
});

// // login
// Route::get('/login', [LoginController::class, 'loginview'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);

// Route::get('genre', [App\Http\Controllers\MovieController::class, 'byGenre'])->name('genre');

// Route::get('/filmbyGenre', [MovieController::class, 'filmByGenre']);
//     return view('genre');

// Route::get('/film/{genre}', [MovieController::class, 'show']);

// Route::get('/cariFilm', [MovieController::class, 'cariFilm']);
//     return view('film');
