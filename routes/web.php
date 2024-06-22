<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/register', 'auth/register') -> name('register');

Route::view('/login', 'auth/login') -> name('login');
