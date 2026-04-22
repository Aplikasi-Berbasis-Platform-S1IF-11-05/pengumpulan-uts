<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = \App\Models\Profile::first();
        $skills = \App\Models\Skill::all();
        $projects = \App\Models\Project::where('type', 'project')->get();
        $achievements = \App\Models\Project::where('type', 'achievement')->get();

        return view('portfolio.index', compact('profile', 'skills', 'projects', 'achievements'));
    }}
