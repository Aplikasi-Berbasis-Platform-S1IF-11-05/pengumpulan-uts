<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PortfolioAdminController;

Route::get('/', function () {
    $profile = \App\Models\Profile::first();
    $skills = \App\Models\Skill::all();
    $experiences = \App\Models\Experience::all();
    $organizations = \App\Models\Organization::all();
    $tools = \App\Models\Tool::all();
    $problemSolvings = \App\Models\ProblemSolving::all();
    $careerTargets = \App\Models\CareerTarget::all();
    $certifications = \App\Models\Certification::all();
    return view('welcome', compact('profile', 'skills', 'experiences', 'organizations', 'certifications', 'tools', 'problemSolvings', 'careerTargets'));
});

Route::get('/dashboard', [PortfolioAdminController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/profile', [PortfolioAdminController::class, 'updateProfile'])->middleware(['auth', 'verified'])->name('admin.profile.update');
Route::post('/admin/skills', [PortfolioAdminController::class, 'storeSkill'])->middleware(['auth', 'verified'])->name('admin.skills.store');
Route::delete('/admin/skills/{skill}', [PortfolioAdminController::class, 'destroySkill'])->middleware(['auth', 'verified'])->name('admin.skills.destroy');

Route::post('/admin/experiences', [PortfolioAdminController::class, 'storeExperience'])->middleware(['auth', 'verified'])->name('admin.experiences.store');
Route::delete('/admin/experiences/{experience}', [PortfolioAdminController::class, 'destroyExperience'])->middleware(['auth', 'verified'])->name('admin.experiences.destroy');

Route::post('/admin/organizations', [PortfolioAdminController::class, 'storeOrganization'])->middleware(['auth', 'verified'])->name('admin.organizations.store');
Route::delete('/admin/organizations/{organization}', [PortfolioAdminController::class, 'destroyOrganization'])->middleware(['auth', 'verified'])->name('admin.organizations.destroy');

Route::post('/admin/certifications', [PortfolioAdminController::class, 'storeCertification'])->middleware(['auth', 'verified'])->name('admin.certifications.store');
Route::delete('/admin/certifications/{certification}', [PortfolioAdminController::class, 'destroyCertification'])->middleware(['auth', 'verified'])->name('admin.certifications.destroy');

Route::post('/admin/tools', [PortfolioAdminController::class, 'storeTool'])->middleware(['auth', 'verified'])->name('admin.tools.store');
Route::delete('/admin/tools/{tool}', [PortfolioAdminController::class, 'destroyTool'])->middleware(['auth', 'verified'])->name('admin.tools.destroy');

Route::post('/admin/problem-solvings', [PortfolioAdminController::class, 'storeProblemSolving'])->middleware(['auth', 'verified'])->name('admin.problem_solvings.store');
Route::delete('/admin/problem-solvings/{problemSolving}', [PortfolioAdminController::class, 'destroyProblemSolving'])->middleware(['auth', 'verified'])->name('admin.problem_solvings.destroy');

Route::post('/admin/career-targets', [PortfolioAdminController::class, 'storeCareerTarget'])->middleware(['auth', 'verified'])->name('admin.career_targets.store');
Route::delete('/admin/career-targets/{careerTarget}', [PortfolioAdminController::class, 'destroyCareerTarget'])->middleware(['auth', 'verified'])->name('admin.career_targets.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
