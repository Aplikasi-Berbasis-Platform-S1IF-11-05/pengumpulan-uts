<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    // FRONTEND
    public function indexPublic()
    {
        $skills = Skill::all();
        return view('frontend.skills', compact('skills'));
    }

    // ADMIN
    public function index()
    {
        $skills = Skill::all();
        return view('admin.skills.index', compact('skills'));
    }

    public function create()
    {
        return view('admin.skills.create');
    }

    public function store(Request $request)
    {
        Skill::create([
            'nama_skill' => $request->nama_skill,
            'level' => $request->level
        ]);

        return redirect()->route('skills.index');
    }

    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        return view('admin.skills.edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $skill = Skill::findOrFail($id);

        $skill->update([
            'nama_skill' => $request->nama_skill,
            'level' => $request->level
        ]);

        return redirect()->route('skills.index');
    }

    public function destroy($id)
    {
        Skill::destroy($id);
        return redirect()->route('skills.index');
    }
}