<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $skills = \App\Models\Skill::all();
        $achievements = \App\Models\Achievement::all();

        return view('landing', compact('skills', 'achievements'));
    }
}
