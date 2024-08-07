<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request): \Illuminate\Http\RedirectResponse
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
        return redirect()->intended('/main-menu');
    }

    public function login(Request $request): \Illuminate\Http\RedirectResponse
    {
        // Валидация
        $fields = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:3'],
        ]);

        // Авторизация
        if (Auth::attempt($fields, $request->get('remember'))) {
            return redirect()->intended('/main-menu');
        } else {
            return redirect()->route('login')->withErrors([
                'failed' => 'Пользователь с такими учетными данным не найден',
            ]);
        }
    }

    public function logout(Request $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
