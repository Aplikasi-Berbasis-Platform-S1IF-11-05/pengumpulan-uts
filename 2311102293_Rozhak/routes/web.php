<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/home', [PortfolioController::class, 'index'])->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    Route::get('/data-diri', [AdminController::class, 'dataDiriIndex'])->name('data-diri.index');
    Route::get('/data-diri/edit', [AdminController::class, 'dataDiriEdit'])->name('data-diri.edit');
    Route::post('/data-diri/update', [AdminController::class, 'dataDiriUpdate'])->name('data-diri.update');
    
    Route::get('/skill', [AdminController::class, 'skillIndex'])->name('skill.index');
    Route::get('/skill/create', [AdminController::class, 'skillCreate'])->name('skill.create');
    Route::post('/skill/store', [AdminController::class, 'skillStore'])->name('skill.store');
    Route::get('/skill/{skill}/edit', [AdminController::class, 'skillEdit'])->name('skill.edit');
    Route::post('/skill/{skill}/update', [AdminController::class, 'skillUpdate'])->name('skill.update');
    Route::post('/skill/{skill}/destroy', [AdminController::class, 'skillDestroy'])->name('skill.destroy');
    
    Route::get('/pencapaian', [AdminController::class, 'pencapaianIndex'])->name('pencapaian.index');
    Route::get('/pencapaian/create', [AdminController::class, 'pencapaianCreate'])->name('pencapaian.create');
    Route::post('/pencapaian/store', [AdminController::class, 'pencapaianStore'])->name('pencapaian.store');
    Route::get('/pencapaian/{pencapaian}/edit', [AdminController::class, 'pencapaianEdit'])->name('pencapaian.edit');
    Route::post('/pencapaian/{pencapaian}/update', [AdminController::class, 'pencapaianUpdate'])->name('pencapaian.update');
    Route::post('/pencapaian/{pencapaian}/destroy', [AdminController::class, 'pencapaianDestroy'])->name('pencapaian.destroy');
});
