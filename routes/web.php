<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('splash');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/menu', function () {
    return view('admin.menu');
})->name('admin.menu');

Route::get('/admin/orders', function () {
    return view('admin.orders');
})->name('admin.orders');

Route::get('/admin/tables', function () {
    return view('admin.tables');
})->name('admin.tables');

Route::get('/admin/bills', function () {
    return view('admin.bills');
})->name('admin.bills');

Route::get('/admin/promos', function () {
    return view('admin.promos');
})->name('admin.promos');