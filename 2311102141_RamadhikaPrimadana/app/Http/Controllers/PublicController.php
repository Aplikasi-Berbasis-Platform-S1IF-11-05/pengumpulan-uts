<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Achievement;

class PublicController extends Controller {
    public function index() {
        $profile = Profile::first(); // Ambil data diri pertama
        $skills = Skill::all();
        $achievements = Achievement::orderBy('tahun', 'desc')->get();
        
        return view('welcome', compact('profile', 'skills', 'achievements'));
    }
}