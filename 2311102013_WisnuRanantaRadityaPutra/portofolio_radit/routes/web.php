<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\Profile;
use App\Models\Skill;

// Halaman Frontend / Landing Page
Route::get('/', function () {
    return view('welcome');
});

// Halaman Admin Dashboard
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::post('/admin/profile/update', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
Route::post('/admin/skill/add', [AdminController::class, 'addSkill'])->name('admin.skill.add');

Route::get('/portfolio-data', function () {
    return response()->json([
        'profile' => Profile::first() ?? ['name' => 'Data Kosong', 'role' => '', 'description' => ''],
        'skills' => Skill::all()
    ]);
});