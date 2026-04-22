<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\AchievementController;


Route::get('/', [PortoController::class, 'index']);

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('skills', SkillController::class);
    Route::resource('achievements', AchievementController::class);
});