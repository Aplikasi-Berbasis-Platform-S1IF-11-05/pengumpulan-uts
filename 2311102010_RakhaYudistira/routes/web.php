<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;


Route::get('/', [DashboardController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::middleware(['auth'])->group(function () {
    Route::resource('admin', AdminController::class); 
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});