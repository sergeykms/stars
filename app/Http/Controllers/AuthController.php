<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Валидация
        $fields = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
        ]);

        // Регистрация
        $user = User::create($fields);

        // Авторизация
        Auth::login($user);

        // Редирект
        return redirect()->route('welcome');
    }

    public function login(Request $request)
    {
        // Валидация
        $fields = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:3'],
        ]);

        // Авторизация
        if (Auth::attempt($fields, $request->get('remember'))) {
            return redirect()->intended();
        } else {
            return redirect()->route('login')->withErrors([
                'failed' => 'Пользователь с такими учетными данным не найден',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
