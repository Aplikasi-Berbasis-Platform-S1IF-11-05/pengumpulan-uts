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
        $achievements = Achievement::all();
        return view('admin.dashboard', compact('profile', 'skills', 'achievements'));
    }

    // Profile CRUD
    public function updateProfile(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'phone' => 'nullable',
            'address' => 'nullable',
            'bio' => 'nullable',
            'about_title' => 'nullable',
            'about_description' => 'nullable',
        ]);

        $profile = Profile::first() ?? new Profile();
        $profile->fill($data);
        $profile->save();

        return back()->with('success', 'Profile updated successfully');
    }

    // Skill CRUD
    public function storeSkill(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'category' => 'nullable',
            'level' => 'required|integer|min:0|max:100',
        ]);

        Skill::create($data);
        return back()->with('success', 'Skill added successfully');
    }

    public function updateSkill(Request $request, Skill $skill)
    {
        $data = $request->validate([
            'name' => 'required',
            'category' => 'nullable',
            'level' => 'required|integer|min:0|max:100',
        ]);

        $skill->update($data);
        return back()->with('success', 'Skill updated successfully');
    }

    public function deleteSkill(Skill $skill)
    {
        $skill->delete();
        return back()->with('success', 'Skill deleted successfully');
    }

    // Achievement CRUD
    public function storeAchievement(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'year' => 'nullable',
        ]);

        Achievement::create($data);
        return back()->with('success', 'Achievement added successfully');
    }

    public function updateAchievement(Request $request, Achievement $achievement)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'year' => 'nullable',
        ]);

        $achievement->update($data);
        return back()->with('success', 'Achievement updated successfully');
    }

    public function deleteAchievement(Achievement $achievement)
    {
        $achievement->delete();
        return back()->with('success', 'Achievement deleted successfully');
    }
}
