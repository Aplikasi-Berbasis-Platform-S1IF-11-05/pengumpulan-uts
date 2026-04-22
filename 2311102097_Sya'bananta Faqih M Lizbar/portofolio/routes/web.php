<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\AchievementController;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Achievement;

Route::get('/', function () {
    return view('portfolio', [
        'profile' => Profile::first(),
        'skills' => Skill::all(),
        'achievements' => Achievement::all()
    ]);
});

// ADMIN
Route::middleware(['auth'])->group(function () {
    Route::resource('profile', ProfileController::class);
    Route::resource('skills', SkillController::class);
    Route::resource('achievements', AchievementController::class);
});

require __DIR__.'/auth.php';
