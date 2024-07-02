<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PlanetController;
use App\Http\Controllers\SettingsConrtroller;
use App\Http\Controllers\SpeciesController;
use App\Http\Controllers\StarshipController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/settings', [SettingsConrtroller::class, 'index'])->name('settings');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/users', [AdminController::class, 'admin_users'])->name('admin_users');

    Route::get('users_list', [UserController::class, 'users_list']) -> name('users_list');

    Route::resource('films', FilmController::class);
    Route::resource('peoples', PeopleController::class);
    Route::resource('planets', PlanetController::class);
    Route::resource('species', SpeciesController::class);
    Route::resource('starships', StarshipController::class);
    Route::resource('vehicles', VehicleController::class);
});

Route::middleware('guest')->group(function () {
    Route::view('/register', 'auth/register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::view('/login', 'auth/login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});



