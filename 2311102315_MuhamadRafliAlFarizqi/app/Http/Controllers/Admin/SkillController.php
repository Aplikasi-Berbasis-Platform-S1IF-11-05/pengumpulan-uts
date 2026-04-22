<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::latest()->get();

        return view('admin.skills.index', compact('skills'));
    }

    public function create()
    {
        return view('admin.skills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|string|max:255',
        ]);

        Skill::create($request->only('name', 'level'));

        return redirect()->route('admin.skills.index')->with('success', 'Skill created successfully.');
    }

    public function show(Skill $skill)
    {
        return view('admin.skills.show', compact('skill'));
    }

    public function edit(Skill $skill)
    {
        return view('admin.skills.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|string|max:255',
        ]);

        $skill->update($request->only('name', 'level'));

        return redirect()->route('admin.skills.index')->with('success', 'Skill updated successfully.');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();

        return redirect()->route('admin.skills.index')->with('success', 'Skill deleted successfully.');
    }
}
