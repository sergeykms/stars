<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users_list() {
        $users = User::all();
        return view('admin.users_list', ['users' => $users]);
    }
}
