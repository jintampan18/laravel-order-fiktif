<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PengaduanDriverController;
use Illuminate\Support\Facades\Route;

// Halaman Utama (Landing)
Route::get('/', [GuestController::class, 'landing'])->name('landing');

// Rute Autentikasi
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('post_login');
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('post_register');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk Tamu (Guest)
Route::prefix('guest')->name('guest.')->group(function () {
    Route::get('list_aduan', [GuestController::class, 'list_aduan'])->name('list_aduan');
    Route::get('detail', [GuestController::class, 'detail'])->name('detail');
});

Route::middleware('auth')->group(function () {
    // Rute untuk Driver
    Route::middleware('role:driver')->prefix('driver')->name('pengaduan_driver.')->group(function () {
        Route::get('pengaduan', [PengaduanDriverController::class, 'index'])->name('index');
        Route::get('form_aduan', [PengaduanDriverController::class, 'form_aduan'])->name('form_aduan');
        Route::post('kirim_aduan', [PengaduanDriverController::class, 'kirim_aduan'])->name('kirim_aduan');
        Route::get('detail_pengaduan/{id}', [PengaduanDriverController::class, 'detail'])->name('detail');
    });

    // Rute untuk Admin
    Route::middleware('role:admin')->group(function () {
        // Dashboard
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Pengaduan
        Route::prefix('pengaduan')->name('pengaduan.')->group(function () {
            Route::get('/', [PengaduanController::class, 'index'])->name('index');
        });

        // Manajemen Driver
        Route::prefix('driver')->name('driver.')->group(function () {
            Route::get('/', [DriverController::class, 'index'])->name('index');
            Route::put('{id}', [DriverController::class, 'update'])->name('update');
            Route::put('{id}/status', [DriverController::class, 'status_account'])->name('toggleStatus');
        });
    });
});
