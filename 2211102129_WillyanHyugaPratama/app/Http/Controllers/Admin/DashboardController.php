<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Profile;

class DashboardController extends Controller
{
    public function index()
    {
        $skillCount = Skill::count();
        $projectCount = Project::count();
        $profile = Profile::first();
        
        return view('admin.dashboard', compact('skillCount', 'projectCount', 'profile'));
    }
}
