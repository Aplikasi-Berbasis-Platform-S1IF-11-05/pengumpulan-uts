<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortoController extends Controller
{
    public function index()
    {
        $skills = \App\Models\Skill::all();
        $achievements = \App\Models\Achievement::all();

        return view('porto', compact('skills', 'achievements'));
    }
}
