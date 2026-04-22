<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Achievement;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $skills = Skill::all();
        $achievements = Achievement::all();
        
        return view('portfolio.index', compact('profile', 'skills', 'achievements'));
    }
}
