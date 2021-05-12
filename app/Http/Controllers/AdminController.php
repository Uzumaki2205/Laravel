<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dash() {
        return view('Admin.dashboard');
    }

    public function Users() {
        $users = User::all();
        return view('Admin.UserList', compact('users', $users));
        // $users->all();
    }
}
