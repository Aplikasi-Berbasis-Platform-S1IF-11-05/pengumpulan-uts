<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\AchievementController;
use App\Models\Skill;
use App\Models\Achievement;
use App\Models\Profile;

/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
*/

// 🌐 FRONTEND (WAJIB pakai controller biar tidak error)
Route::get('/', [ProfileController::class, 'index'])->name('home');


/*
|--------------------------------------------------------------------------
| AUTH (Laravel Breeze)
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';


/*
|--------------------------------------------------------------------------
| DASHBOARD (HARUS LOGIN)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // 🏠 Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard', [
            'skills' => Skill::all(),
            'achievements' => Achievement::all(),
            'profile' => Profile::first()
        ]);
    })->name('dashboard');

    // 👤 PROFILE CRUD
    Route::resource('profile', ProfileController::class);

    // 🧠 SKILL CRUD
    Route::resource('skill', SkillController::class);

    // 🏆 ACHIEVEMENT CRUD
    Route::resource('achievement', AchievementController::class);

});