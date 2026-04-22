<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $skills = Skill::all()->groupBy('category');
        $projects = Project::orderBy('year', 'desc')->get();

        return view('portfolio.index', compact('profile', 'skills', 'projects'));
    }
}
