<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        $complaints = Complaint::with('user')->get();

        return view('pages.admin.manajemen-pengaduan.index', compact('complaints'));
    }
}
