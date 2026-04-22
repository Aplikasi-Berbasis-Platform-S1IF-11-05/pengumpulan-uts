<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $personalInfo = \App\Models\PersonalInfo::first();
        $skills = \App\Models\Skill::all()->groupBy('category');
        $achievements = \App\Models\Achievement::all()->groupBy('type');

        return view('portfolio.index', compact('personalInfo', 'skills', 'achievements'));
    }
}
