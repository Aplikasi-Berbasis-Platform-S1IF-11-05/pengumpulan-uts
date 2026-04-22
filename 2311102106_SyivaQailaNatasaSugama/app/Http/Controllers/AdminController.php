<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Achievement;

class AdminController extends Controller
{
    public function dashboard()
    {
        $profile = Profile::first();
        $skills = Skill::all();
        $achievements = Achievement::orderBy('year', 'desc')->get();
        return view('admin.dashboard', compact('profile', 'skills', 'achievements'));
    }

    public function updateProfile(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'role' => 'required|string',
            'bio' => 'required|string',
            'email' => 'nullable|email',
            'linkedin' => 'nullable|url',
            'github' => 'nullable|url',
        ]);

        $profile = Profile::first();
        $profile->update($data);

        return back()->with('success', 'Profile updated successfully!');
    }

    public function addSkill(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'category' => 'nullable|string',
        ]);

        Skill::create($data);
        return back()->with('success', 'Skill added successfully!');
    }

    public function deleteSkill(Skill $skill)
    {
        $skill->delete();
        return back()->with('success', 'Skill deleted successfully!');
    }

    public function addAchievement(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'year' => 'required|string',
            'company' => 'nullable|string',
            'role' => 'nullable|string',
        ]);

        Achievement::create($data);
        return back()->with('success', 'Achievement added successfully!');
    }

    public function updateAchievement(Request $request, Achievement $achievement)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'year' => 'required|string',
            'company' => 'nullable|string',
            'role' => 'nullable|string',
        ]);

        $achievement->update($data);
        return back()->with('success', 'Achievement updated successfully!');
    }

    public function deleteAchievement(Achievement $achievement)
    {
        $achievement->delete();
        return back()->with('success', 'Achievement deleted successfully!');
    }
}
