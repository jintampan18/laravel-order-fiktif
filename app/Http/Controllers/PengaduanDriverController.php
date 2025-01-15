<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaduanDriverController extends Controller
{
    public function index()
    {
        return view('pages.driver.aduan-saya');
    }

    public function form_aduan()
    {
        // Memeriksa apakah pengguna sudah login
        if (!Auth::check()) {
            return redirect()->route('login')->with('message', 'Silakan login untuk mengakses halaman ini.');
        }

        return view('pages.driver.form-aduan');
    }

    public function detail()
    {
        return view('pages.driver.detail');
    }
}
