<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', [PortfolioController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Profile CRUD (Update only)
    Route::post('/profile/update', [AdminController::class, 'updateProfile'])->name('profile.update');
    
    // Skills CRUD
    Route::post('/skills', [AdminController::class, 'addSkill'])->name('skills.store');
    Route::delete('/skills/{skill}', [AdminController::class, 'deleteSkill'])->name('skills.destroy');
    
    // Achievements CRUD
    Route::post('/achievements', [AdminController::class, 'addAchievement'])->name('achievements.store');
    Route::put('/achievements/{achievement}', [AdminController::class, 'updateAchievement'])->name('achievements.update');
    Route::delete('/achievements/{achievement}', [AdminController::class, 'deleteAchievement'])->name('achievements.destroy');
});
