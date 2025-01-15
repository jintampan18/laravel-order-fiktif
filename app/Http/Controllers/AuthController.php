<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|string',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'Akun belum terdaftar'])->withInput();
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return redirect()->back()->withErrors(['password' => 'Password salah'])->withInput();
        }

        if ($user->role === 'admin') {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('landing');
        }
    }

    public function showRegisterForm()
    {
        return view('pages.auth.register');
    }

    public function register(Request $request)
    {
        // dd($request->all());

        // Validasi input
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:8',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:255',
        ]);

        // dd($request->all());

        // Membuat pengguna baru
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'driver',
            'status' => 'active',
        ]);

        // Menambahkan detail untuk pengguna
        UserDetail::create([
            'user_id' => $user->id,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
        ]);

        return redirect()->route('login');
    }

    // Menangani proses logout
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('landing')->with('success', 'Anda telah logout.');
    }
}
