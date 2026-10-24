<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PengaduanController;


    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.process');

    Route::get('/register', [AuthController::class, 'create'])->name('register');
    Route::post('/register', [AuthController::class, 'store'])->name('register.store');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::delete('/logout', [AuthController::class, 'destroy'])->name('logout');

    Route::resource('pengaduan', PengaduanController::class)->only(['create', 'store']);
    Route::resource('admin/pengaduan', PengaduanController::class)->names(['index' => 'admin.pengaduan.index', 'show' => 'admin.pengaduan.show',])->only(['index', 'show']);

Route::get('/', function () {
    return redirect()->route('login');
});