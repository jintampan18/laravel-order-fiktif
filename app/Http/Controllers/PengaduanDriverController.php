<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\JenisAduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaduanDriverController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;

        $complaints = Complaint::where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.driver.aduan-saya', compact('complaints'));
    }

    public function form_aduan()
    {
        $jenis_aduans = JenisAduan::all();

        return view('pages.driver.form-aduan', compact('jenis_aduans'));
    }

    public function kirim_aduan(Request $request)
    {
        // Validasi input
        $request->validate([
            'customerName' => 'required|string|max:255',
            'customerNumber' => 'required|string|max:15',
            'complaintType' => 'required|exists:jenis_aduan,id',
            'notes' => 'required|string',
            'screenshot' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Membuat entri baru di tabel aduan
        $aduan = new Complaint();
        $aduan->user_id = Auth::id();
        $aduan->name_customer = $request->customerName;
        $aduan->number_phone_customer = $request->customerNumber;
        $aduan->jenis_aduan_id = $request->complaintType;
        $aduan->catatan = $request->notes;

        // Menyimpan file screenshot jika ada
        if ($request->hasFile('screenshot')) {
            $screenshotPath = $request->file('screenshot')->store('screenshots', 'public');
            $aduan->bukti_ss = $screenshotPath;
        } else {
            $aduan->bukti_ss = "no-image";
        }

        $aduan->status_aduan = "proses";
        $aduan->save();

        return redirect()->route('pengaduan_driver.index')->with('success', 'Pengaduan berhasil dikirim.');
    }

    public function detail($id)
    {
        $complaint = Complaint::with('user', 'jenisAduan')->findOrFail($id);

        return view('pages.driver.detail', compact('complaint'));
    }
}
