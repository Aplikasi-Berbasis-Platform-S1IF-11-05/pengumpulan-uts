<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Admin\SkillController;
// (Import juga ProfileController dan AchievementController nantinya)

// HALAMAN PUBLIK
Route::get('/', [PublicController::class, 'index'])->name('home');

// HALAMAN DASHBOARD ADMIN (Wajib Login)
Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    
    // 1. Route dashboard namanya dibiarkan persis 'dashboard' agar Breeze tidak error
    Route::get('/dashboard', function () {
        return view('dashboard'); 
    })->name('dashboard');

    // 2. Route untuk CRUD kita kelompokkan ke dalam awalan nama 'admin.'
    Route::name('admin.')->group(function () {
        Route::resource('skills', App\Http\Controllers\Admin\SkillController::class);
        // Jika nanti Profile dan Achievement sudah dibuat controllernya, buka komentarnya:
        // Route::resource('profiles', App\Http\Controllers\Admin\ProfileController::class);
        // Route::resource('achievements', App\Http\Controllers\Admin\AchievementController::class);
    });
});

require __DIR__.'/auth.php';