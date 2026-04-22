<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\AchievementController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ProfileController::class, 'show']);
Route::get('/skills', [SkillController::class, 'indexPublic'])->name('skills.public');
Route::get('/achievement', [AchievementController::class, 'indexPublic'])->name('achievement.public');




Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile edit (admin)
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    // CRUD Skill
    Route::resource('skills', SkillController::class)->except(['show']);

    // CRUD Achievement
    Route::resource('achievements', AchievementController::class)->except(['show']);
});



require __DIR__.'/auth.php';