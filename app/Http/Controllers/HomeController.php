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

            $data['articles'] = Artikel::where('id_user', Auth::user()->id)->get();
            return view('admin.index', compact('data'));
        }

        $data['articles'] = Artikel::all();

        return view('guest.index', compact('data'));

    }
}
