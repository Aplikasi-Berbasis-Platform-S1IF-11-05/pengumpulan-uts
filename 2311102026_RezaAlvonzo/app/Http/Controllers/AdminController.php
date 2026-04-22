<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;

class AdminController extends Controller
{
    public function index()
    {
        $skillCount = Skill::count();
        $projectCount = Project::count();
        return view('admin.dashboard', compact('skillCount', 'projectCount'));
    }

    // Profile
    public function editProfile()
    {
        $profile = Profile::first();
        return view('admin.profile', compact('profile'));
    }

    public function updateProfile(Request $request)
    {
        $profile = Profile::first();
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'about' => 'nullable|string',
            'focus' => 'nullable|string',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
        ]);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('profile', 'public');
        }

        $profile->update($data);
        return back()->with('success', 'Profile updated successfully.');
    }

    // Skills
    public function skills()
    {
        $skills = Skill::all();
        return view('admin.skills', compact('skills'));
    }

    public function storeSkill(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string',
            'level' => 'required|integer|min:0|max:100',
        ]);

        Skill::create($data);
        return back()->with('success', 'Skill added successfully.');
    }

    public function updateSkill(Request $request, Skill $skill)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string',
            'level' => 'required|integer|min:0|max:100',
        ]);

        $skill->update($data);
        return back()->with('success', 'Skill updated successfully.');
    }

    public function destroySkill(Skill $skill)
    {
        $skill->delete();
        return back()->with('success', 'Skill deleted successfully.');
    }

    // Projects
    public function projects()
    {
        $projects = Project::all();
        return view('admin.projects', compact('projects'));
    }

    public function storeProject(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'role' => 'nullable|string',
            'year' => 'nullable|string',
            'description' => 'nullable|string',
            'highlights' => 'nullable|string',
            'link' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        Project::create($data);
        return back()->with('success', 'Project added successfully.');
    }

    public function updateProject(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'role' => 'nullable|string',
            'year' => 'nullable|string',
            'description' => 'nullable|string',
            'highlights' => 'nullable|string',
            'link' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        $project->update($data);
        return back()->with('success', 'Project updated successfully.');
    }

    public function destroyProject(Project $project)
    {
        $project->delete();
        return back()->with('success', 'Project deleted successfully.');
    }
}
