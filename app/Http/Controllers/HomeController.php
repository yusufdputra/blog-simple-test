<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
 
    public function index()
    {
        $data['title'] = "Selamat datang di blog sederhana";
        // cek role
        if (Auth::check()) {
            return view('admin.home', compact('data'));
        }

        $data['articles'] = Artikel::all();

        return view('guest.index', compact('data'));

    }
}
