<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function landing()
    {
        return view('pages.guest.landing');
    }

    public function list_aduan(Request $request)
    {
        $request->validate([
            'customer_number' => 'required|string|max:15',
        ]);

        $customerNumber = $request->input('customer_number');

        $complaints = Complaint::where('number_phone_customer', $customerNumber)->get();

        // // Cari pengaduan berdasarkan nomor customer menggunakan LIKE
        // $complaints = Complaint::where('number_phone_customer', 'LIKE', '%' . $customerNumber . '%')->get();

        // Kembalikan view dengan data pengaduan
        return view('pages.guest.list-aduan', compact('customerNumber', 'complaints'));
    }

    public function detail($id)
    {
        $complaint = Complaint::with('user', 'jenisAduan')->findOrFail($id);

        return view('pages.guest.detail', compact('complaint'));
    }
}
