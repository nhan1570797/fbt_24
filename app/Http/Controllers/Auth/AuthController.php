<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.auth.login');
    }

    public function regsiter()
    {
        return view('auth.auth.regsiter');
    }
}
