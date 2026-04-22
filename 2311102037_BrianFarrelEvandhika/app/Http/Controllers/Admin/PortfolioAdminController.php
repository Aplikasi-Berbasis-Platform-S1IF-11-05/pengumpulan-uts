<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Organization;
use App\Models\Certification;
use App\Models\Tool;
use App\Models\ProblemSolving;
use App\Models\CareerTarget;
use Illuminate\Support\Facades\Storage;

class PortfolioAdminController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $skills = Skill::all();
        $experiences = Experience::all();
        $organizations = Organization::all();
        $certifications = Certification::all();
        $tools = Tool::all();
        $problemSolvings = ProblemSolving::all();
        $careerTargets = CareerTarget::all();
        return view('dashboard', compact('profile', 'skills', 'experiences', 'organizations', 'certifications', 'tools', 'problemSolvings', 'careerTargets'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'about' => 'required|string',
            'photo' => 'nullable|image|max:2048',
            'nim' => 'nullable|string',
            'program_studi' => 'nullable|string',
            'universitas' => 'nullable|string',
            'ipk' => 'nullable|string',
            'email' => 'nullable|string',
            'cv_link' => 'nullable|string',
            'github' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'telegram' => 'nullable|string',
            'web' => 'nullable|string',
            'whatsapp' => 'nullable|string',
        ]);

        $profile = Profile::first() ?? new Profile();
        $profile->fill($request->except('photo'));

        if ($request->hasFile('photo')) {
            if ($profile->photo_path && Storage::disk('public')->exists($profile->photo_path)) {
                Storage::disk('public')->delete($profile->photo_path);
            }
            $path = $request->file('photo')->store('profiles', 'public');
            $profile->photo_path = $path;
        }

        $profile->save();

        return redirect()->route('dashboard')->with('success', 'Profile updated successfully!');
    }

    // Skills
    public function storeSkill(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255', 'proficiency' => 'required|integer|min:0|max:100']);
        Skill::create($request->only(['name', 'proficiency']));
        return back()->with('success', 'Skill added!');
    }
    public function destroySkill(Skill $skill) { $skill->delete(); return back()->with('success', 'Skill removed!'); }

    // Experiences
    public function storeExperience(Request $request)
    {
        $request->validate(['company' => 'required|string', 'year' => 'required|string', 'role' => 'required|string', 'description' => 'required|string', 'tech_stack' => 'nullable|string']);
        Experience::create($request->only(['company', 'year', 'role', 'description', 'tech_stack']));
        return back()->with('success', 'Experience added!');
    }
    public function destroyExperience(Experience $experience) { $experience->delete(); return back()->with('success', 'Experience removed!'); }

    // Organizations
    public function storeOrganization(Request $request)
    {
        $request->validate(['name' => 'required|string', 'year' => 'nullable|string']);
        Organization::create($request->only(['name', 'year']));
        return back()->with('success', 'Organization added!');
    }
    public function destroyOrganization(Organization $organization) { $organization->delete(); return back()->with('success', 'Organization removed!'); }

    // Certifications
    public function storeCertification(Request $request)
    {
        $request->validate(['name' => 'required|string', 'year' => 'nullable|string']);
        Certification::create($request->only(['name', 'year']));
        return back()->with('success', 'Certification added!');
    }
    public function destroyCertification(Certification $certification) { $certification->delete(); return back()->with('success', 'Certification removed!'); }

    // Tools
    public function storeTool(Request $request)
    {
        $request->validate(['name' => 'required|string']);
        Tool::create($request->only(['name']));
        return back()->with('success', 'Tool added!');
    }
    public function destroyTool(Tool $tool) { $tool->delete(); return back()->with('success', 'Tool removed!'); }

    // Problem Solving
    public function storeProblemSolving(Request $request)
    {
        $request->validate(['aspect' => 'required|string', 'description' => 'required|string']);
        ProblemSolving::create($request->only(['aspect', 'description']));
        return back()->with('success', 'Problem Solving added!');
    }
    public function destroyProblemSolving(ProblemSolving $problemSolving) { $problemSolving->delete(); return back()->with('success', 'Problem Solving removed!'); }

    // Career Targets
    public function storeCareerTarget(Request $request)
    {
        $request->validate(['term' => 'required|string', 'goal' => 'required|string']);
        CareerTarget::create($request->only(['term', 'goal']));
        return back()->with('success', 'Career Target added!');
    }
    public function destroyCareerTarget(CareerTarget $careerTarget) { $careerTarget->delete(); return back()->with('success', 'Career Target removed!'); }

}
