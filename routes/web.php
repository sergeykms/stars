<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettngsConrtroller;
use App\Http\Controllers\UserInfoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/settings', [SettngsConrtroller::class, 'index'])->name('settings');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::view('/register', 'auth/register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::view('/login', 'auth/login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::resource('user_info', UserInfoController::class);



