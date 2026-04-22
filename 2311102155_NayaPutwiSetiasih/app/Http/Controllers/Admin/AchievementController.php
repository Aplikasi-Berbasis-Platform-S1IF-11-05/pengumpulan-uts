<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Achievement;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements = Achievement::latest()->get();

        return view('admin.achievements.index', compact('achievements'));
    }

    public function create()
    {
        return view('admin.achievements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Achievement::create($request->only('name', 'description'));

        return redirect()->route('admin.achievements.index')->with('success', 'Achievement created successfully.');
    }

    public function show(Achievement $achievement)
    {
        return view('admin.achievements.show', compact('achievement'));
    }

    public function edit(Achievement $achievement)
    {
        return view('admin.achievements.edit', compact('achievement'));
    }

    public function update(Request $request, Achievement $achievement)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $achievement->update($request->only('name', 'description'));

        return redirect()->route('admin.achievements.index')->with('success', 'Achievement updated successfully.');
    }

    public function destroy(Achievement $achievement)
    {
        $achievement->delete();

        return redirect()->route('admin.achievements.index')->with('success', 'Achievement deleted successfully.');
    }
}
