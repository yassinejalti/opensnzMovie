<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/trending-movies', [MovieController::class, 'index'])->name('trending.movies');
    Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');
});
