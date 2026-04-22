<?php

use Illuminate\Support\Facades\Route;
use App\Models\Profile;
use App\Models\Skill;

Route::get('/portfolio-data', function () {
    return response()->json([
        // Ambil data pertama atau buat default kosong jika belum ada
        'profile' => Profile::first() ?? ['name' => 'Data Kosong', 'role' => '', 'description' => ''],
        'skills' => Skill::all()
    ]);
});