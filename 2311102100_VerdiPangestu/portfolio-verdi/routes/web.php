<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Halaman Utama Portofolio (Frontend)
Route::get('/', [HomeController::class, 'index']);

// Halaman Dashboard Admin & CRUD (Hanya bisa diakses setelah login)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Route Proses CRUD
    Route::post('/dashboard/profile', [DashboardController::class, 'updateProfile'])->name('admin.profile.update');
    Route::post('/dashboard/skill', [DashboardController::class, 'storeSkill'])->name('admin.skill.store');
    Route::delete('/dashboard/skill/{id}', [DashboardController::class, 'destroySkill'])->name('admin.skill.destroy');
    Route::post('/dashboard/achievement', [DashboardController::class, 'storeAchievement'])->name('admin.achievement.store');
    Route::delete('/dashboard/achievement/{id}', [DashboardController::class, 'destroyAchievement'])->name('admin.achievement.destroy');
});

// Route bawaan Breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';