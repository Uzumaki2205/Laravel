<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dash() {
        return view('Admin.dashboard');
    }

    public function Users() {
        return view('Admin.UserList');
    }
}
