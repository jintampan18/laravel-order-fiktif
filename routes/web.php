<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DriverController;
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

Route::middleware('auth')->group(function () {
    // dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // pengaduan
    Route::get('pengaduan', [DriverController::class, 'index'])->name('pengaduan.index');

    // user
    Route::get('driver', [DriverController::class, 'index'])->name('driver.index');
    Route::put('driver/{id}', [DriverController::class, 'update'])->name('driver.update');
    Route::put('driver/{id}/status', [DriverController::class, 'status_account'])->name('driver.toggleStatus');
});
