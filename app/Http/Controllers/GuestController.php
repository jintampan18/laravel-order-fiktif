<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function landing()
    {
        return view('pages.guest.landing');
    }

    public function list_aduan()
    {
        return view('pages.guest.list-aduan');
    }

    public function detail()
    {
        return view('pages.guest.detail');
    }
}
