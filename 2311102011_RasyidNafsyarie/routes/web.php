<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    // Profile
    Route::post('/profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
    
    // Skills
    Route::post('/skills', [AdminController::class, 'storeSkill'])->name('admin.skills.store');
    Route::put('/skills/{skill}', [AdminController::class, 'updateSkill'])->name('admin.skills.update');
    Route::delete('/skills/{skill}', [AdminController::class, 'deleteSkill'])->name('admin.skills.delete');
    
    // Achievements
    Route::post('/achievements', [AdminController::class, 'storeAchievement'])->name('admin.achievements.store');
    Route::put('/achievements/{achievement}', [AdminController::class, 'updateAchievement'])->name('admin.achievements.update');
    Route::delete('/achievements/{achievement}', [AdminController::class, 'deleteAchievement'])->name('admin.achievements.delete');
});
