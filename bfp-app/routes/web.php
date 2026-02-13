<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php';

Route::middleware('guest')->group(function () {
    Route::view('login', 'pages.auth.login')->name('login');
    Route::view('register', 'pages.auth.register')->name('register');
});