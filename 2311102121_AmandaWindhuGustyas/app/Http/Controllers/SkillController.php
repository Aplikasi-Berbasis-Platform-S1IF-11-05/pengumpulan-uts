<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('skills.index', compact('skills'));
    }

    public function create()
    {
        return view('skills.create');
    }

    public function store(Request $request)
    {
        Skill::create([
            'name' => $request->name,
            'level' => $request->level
        ]);

        return redirect('/skills');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $skill = Skill::find($id);
        return view('skills.edit', compact('skill'));
    }

    public function update(Request $request, string $id)
    {
        $skill = Skill::find($id);
        $skill->update([
            'name' => $request->name,
            'level' => $request->level
        ]);

        return redirect('/skills');
    }

    public function destroy(string $id)
    {
        Skill::destroy($id);
        return redirect('/skills');
    }
}