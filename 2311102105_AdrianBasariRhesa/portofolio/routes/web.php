<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;

// Halaman Depan Portofolio
Route::get('/', [FrontController::class, 'index']);

// Halaman Login
Route::get('/login', [AdminController::class, 'showLogin'])->name('login');
Route::post('/login', [AdminController::class, 'login']);
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

// Group Route untuk Admin Dashboard (Wajib Login)
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    Route::post('/profile/update', [AdminController::class, 'updateProfile']);
    Route::post('/skill/store', [AdminController::class, 'storeSkill']);
    Route::delete('/skill/{id}', [AdminController::class, 'deleteSkill']);
    Route::post('/achievement/store', [AdminController::class, 'storeAchievement']);
    Route::delete('/achievement/{id}', [AdminController::class, 'deleteAchievement']);
});