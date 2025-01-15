<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaduanDriverController extends Controller
{
    public function index()
    {
        return view('pages.driver.aduan-saya');
    }
    public function form_aduan()
    {
        return view('pages.driver.form-aduan');
    }

    public function detail()
    {
        return view('pages.driver.detail');
    }
}
