<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Achievement;

class FrontController extends Controller
{
    public function index() {
        $profile = Profile::first();
        $skills = Skill::all();
        $achievements = Achievement::all();
        return view('welcome', compact('profile', 'skills', 'achievements'));
    }
}