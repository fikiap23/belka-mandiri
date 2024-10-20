<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('home', compact('user'));
    }

    public function pelatihan()
    {
        $user = Auth::user();

        return view('pelatihan', compact('user'));
    }

    public function alumni()
    {
        $user = Auth::user();

        return view('alumni', compact('user'));
    }

    public function tentang_kami()
    {
        $user = Auth::user();

        return view('tentang_kami', compact('user'));
    }

    public function informasi()
    {
        $user = Auth::user();

        return view('informasi', compact('user'));
    }
}
