<?php

use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;

// Untuk menampilkan halaman
Route::get('/', function () {
    return view('index');
})->name('index');

// Untuk redirect ke Google
Route::get('login/google/redirect', [SocialiteController::class, 'redirect'])
    ->middleware(['guest'])
    ->name('redirect');

// Untuk callback dari Google
Route::get('login/google/callback', [SocialiteController::class, 'callback'])
    ->middleware(['guest'])
    ->name('callback');

// Untuk logout
Route::post('logout', [SocialiteController::class, 'logout'])
    ->middleware(['auth'])
    ->name('logout');
