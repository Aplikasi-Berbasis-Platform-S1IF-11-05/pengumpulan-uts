<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes (Protected)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    
    // Profile CRUD
    Route::get('/profile', [AdminController::class, 'editProfile'])->name('admin.profile');
    Route::put('/profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
    
    // Skills CRUD
    Route::get('/skills', [AdminController::class, 'skills'])->name('admin.skills');
    Route::post('/skills', [AdminController::class, 'storeSkill'])->name('admin.skills.store');
    Route::put('/skills/{skill}', [AdminController::class, 'updateSkill'])->name('admin.skills.update');
    Route::delete('/skills/{skill}', [AdminController::class, 'destroySkill'])->name('admin.skills.destroy');
    
    // Projects CRUD
    Route::get('/projects', [AdminController::class, 'projects'])->name('admin.projects');
    Route::post('/projects', [AdminController::class, 'storeProject'])->name('admin.projects.store');
    Route::put('/projects/{project}', [AdminController::class, 'updateProject'])->name('admin.projects.update');
    Route::delete('/projects/{project}', [AdminController::class, 'destroyProject'])->name('admin.projects.destroy');
});
