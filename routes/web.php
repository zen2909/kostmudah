<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'show_signin'])->name('signin.index');
Route::get('/signup', [AuthController::class, 'show_signup'])->name('signup.index');
Route::post('/signin', [AuthController::class, 'signin'])->name('signin.penyewa');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.penyewa');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/sewa', [SewaController::class, 'index'])->name('sewa.index');
Route::get('/detail', [DetailController::class, 'index'])->name('detail.index');