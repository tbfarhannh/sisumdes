<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
        return view('public.beranda');
    }

    public function profile()
    {
        return view('public.profil-desa');
    }

    public function news()
    {
        return view('public.berita');
    }

    public function contact()
    {
        return view('public.kontak');
    }
}
