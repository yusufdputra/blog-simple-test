<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $data['title'] = "Sign In";
        return view('auth.login', compact('data'));
    }

    
}
