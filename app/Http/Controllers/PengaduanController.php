<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        $complaints = Complaint::with('user')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.admin.manajemen-pengaduan.index', compact('complaints'));
    }

    public function show($id)
    {
        $complaint = Complaint::with('user', 'jenisAduan')->findOrFail($id);

        return view('pages.admin.manajemen-pengaduan.detail', compact('complaint'));
    }

    public function ubah_status(Request $request, $id)
    {
        $complaint = Complaint::findOrFail($id);

        $complaint->status_aduan = $request->status_aduan;
        $complaint->save();

        return redirect()->back()->with('success', 'Status aduan berhasil diperbarui.');
    }
}
