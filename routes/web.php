<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('showRegisterForm');
    Route::post('/register', [AuthController::class, 'register'])->name('register');

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('showLoginForm');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'showDashboard'])->name('showDashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/profile/create', [ProfileController::class, 'showProfileForm'])->name('profile.create');
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');

    Route::get('/profile/edit-profile/{profile}', [ProfileController::class, 'editProfile'])->name('profile.edit');
    Route::put('/profile/update-profile/{profile}', [ProfileController::class, 'update'])->name('profile.update');
});