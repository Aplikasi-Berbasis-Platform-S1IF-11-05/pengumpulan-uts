<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\ProfileController;

// ======================
// HOME
// ======================
Route::get('/', function () {
    return view('home');
});

// ======================
// LOGIN
// ======================
Route::get('/login', [AuthController::class, 'form'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// ======================
// LOGOUT
// ======================
Route::get('/logout', [AuthController::class, 'logout']);

// ======================
// DASHBOARD
// ======================
Route::get('/dashboard', [AuthController::class, 'dashboard']);

// ======================
// CRUD
// ======================
Route::resource('skills', SkillController::class);
Route::resource('achievements', AchievementController::class);

// ======================
// PROFILE
// ======================
Route::get('/profile', [ProfileController::class, 'index']);
Route::post('/profile', [ProfileController::class, 'store']);