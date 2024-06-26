<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettngsConrtroller;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome') -> name('welcome');

Route::get('/settings', [SettngsConrtroller::class, 'index']) -> name('settings');

Route::get('/home', [AuthController::class, 'home']) -> name('home');

Route::view('/register', 'auth/register') -> name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::view('/login', 'auth/login') -> name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']) -> name('logout');
