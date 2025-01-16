<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Total driver
        $totalDrivers = User::where('role', 'driver')->count();
        $totalActiveDrivers = User::where('role', 'driver')->where('status', 'active')->count();
        $totalDeactiveDrivers = User::where('role', 'driver')->where('status', 'deactive')->count();

        // Total pengaduan order fiktif
        $totalComplaints = Complaint::count();
        $totalComplaintsInProcess = Complaint::where('status_aduan', 'proses')->count();
        $totalComplaintsInVerification = Complaint::where('status_aduan', 'verifikasi')->count();
        $totalComplaintsRejected = Complaint::where('status_aduan', 'tolak')->count();

        return view('index', compact(
            'totalDrivers',
            'totalActiveDrivers',
            'totalDeactiveDrivers',
            'totalComplaints',
            'totalComplaintsInProcess',
            'totalComplaintsInVerification',
            'totalComplaintsRejected'
        ));
    }
}
