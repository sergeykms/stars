<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\SettingsConrtroller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/settings', [SettingsConrtroller::class, 'index'])->name('settings');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/users', [AdminController::class, 'admin_users'])->name('admin_users');

    Route::get('users_list', [UserController::class, 'users_list']) -> name('users_list');

    Route::resource('films', FilmController::class);
});

Route::middleware('guest')->group(function () {
    Route::view('/register', 'auth/register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::view('/login', 'auth/login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});



