<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('pages.auth.login');
});

Route::get('/register', function () {
    return view('pages.auth.register');
});

Route::get('/pengaduan', function () {
    return view('pages.admin.manajemen-pengaduan.index');
});

Route::get('/user', function () {
    return view('pages.admin.manajemen-user.index');
});
