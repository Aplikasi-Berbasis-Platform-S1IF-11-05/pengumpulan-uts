<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Models\Skill;

Route::get('/', function () {
    return view('portofolio.home');
});

Route::get('/skills', function () {
    return view('portofolio.skills', [
        'skills' => \App\Models\Skill::all()
    ]);
});

// Admin
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return redirect('/admin/skills');
    });

    Route::resource('/admin/skills', SkillController::class);
});