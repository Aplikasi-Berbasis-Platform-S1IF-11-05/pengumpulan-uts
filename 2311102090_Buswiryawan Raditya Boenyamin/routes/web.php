<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Profile
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::post('/profile', [AdminController::class, 'updateProfile'])->name('profile.update');

    // Skills
    Route::get('/skills', [AdminController::class, 'skills'])->name('skills');
    Route::post('/skills', [AdminController::class, 'storeSkill'])->name('skills.store');
    Route::put('/skills/{skill}', [AdminController::class, 'updateSkill'])->name('skills.update');
    Route::delete('/skills/{skill}', [AdminController::class, 'destroySkill'])->name('skills.destroy');

    // Achievements
    Route::get('/achievements', [AdminController::class, 'achievements'])->name('achievements');
    Route::post('/achievements', [AdminController::class, 'storeAchievement'])->name('achievements.store');
    Route::put('/achievements/{achievement}', [AdminController::class, 'updateAchievement'])->name('achievements.update');
    Route::delete('/achievements/{achievement}', [AdminController::class, 'destroyAchievement'])->name('achievements.destroy');

    // Change Password
    Route::get('/password', [AdminController::class, 'showPasswordForm'])->name('password');
    Route::post('/password', [AdminController::class, 'updatePassword'])->name('password.update');
});
