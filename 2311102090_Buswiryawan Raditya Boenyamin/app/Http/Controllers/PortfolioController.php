<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Achievement;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $skills = Skill::all();
        $achievements = Achievement::orderBy('date', 'desc')->get();

        return view('welcome', compact('profile', 'skills', 'achievements'));
    }
}
