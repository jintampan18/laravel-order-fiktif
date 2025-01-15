<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PengaduanDriverController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    } else {
        return redirect()->route('login');
    }
});

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('post_login');
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('post_register');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Guest
Route::get('landing', [GuestController::class, 'landing'])->name('guest.landing');
Route::get('list_aduan', [GuestController::class, 'list_aduan'])->name('guest.list_aduan');
Route::get('detail', [GuestController::class, 'detail'])->name('guest.detail');

// Driver
Route::get('pengaduan_driver', [PengaduanDriverController::class, 'index'])->name('pengaduan_driver.index');
Route::get('form_aduan', [PengaduanDriverController::class, 'form_aduan'])->name('pengaduan_driver.form_aduan');
Route::get('detail_pengaduan_driver', [PengaduanDriverController::class, 'detail'])->name('pengaduan_driver.detail');

Route::middleware('auth')->group(function () {
    // dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // pengaduan
    Route::get('pengaduan', [PengaduanController::class, 'index'])->name('pengaduan.index');

    // user
    Route::get('driver', [DriverController::class, 'index'])->name('driver.index');
    Route::put('driver/{id}', [DriverController::class, 'update'])->name('driver.update');
    Route::put('driver/{id}/status', [DriverController::class, 'status_account'])->name('driver.toggleStatus');
});
