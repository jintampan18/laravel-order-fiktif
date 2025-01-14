<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DriverController extends Controller
{
    public function index()
    {
        $driver = UserDetail::with('user')->get();

        return view('pages.admin.manajemen-user.index', compact('driver'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|string',
            'username' => 'required|string|max:255',
            'password' => 'nullable|string|min:8',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:255',
        ]);

        $user = User::findOrFail($id);

        // Update data pengguna
        $user->email = $request->email;
        $user->username = $request->username;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        // Update detail pengguna
        $userDetail = UserDetail::where('user_id', $id)->first();
        $userDetail->phone_number = $request->phone_number;
        $userDetail->address = $request->address;
        $userDetail->save();

        return redirect()->back()->with('success', 'Data driver berhasil diperbarui.');
    }

    public function status_account(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Ubah status
        $user->status = $request->status;
        $user->save();

        return response()->json(['success' => true]);
    }
}
