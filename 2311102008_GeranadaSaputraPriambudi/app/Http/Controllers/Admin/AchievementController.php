<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achievements = \App\Models\Achievement::all();
        return view('admin.achievements.index', compact('achievements'));
    }

    public function create()
    {
        return view('admin.achievements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'nullable|string|max:255',
            'organization' => 'nullable|string|max:255',
        ]);

        \App\Models\Achievement::create($request->all());

        return redirect()->route('admin.achievements.index')->with('success', 'Achievement created successfully.');
    }

    public function edit(string $id)
    {
        $achievement = \App\Models\Achievement::findOrFail($id);
        return view('admin.achievements.edit', compact('achievement'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'nullable|string|max:255',
            'organization' => 'nullable|string|max:255',
        ]);

        $achievement = \App\Models\Achievement::findOrFail($id);
        $achievement->update($request->all());

        return redirect()->route('admin.achievements.index')->with('success', 'Achievement updated successfully.');
    }

    public function destroy(string $id)
    {
        $achievement = \App\Models\Achievement::findOrFail($id);
        $achievement->delete();

        return redirect()->route('admin.achievements.index')->with('success', 'Achievement deleted successfully.');
    }
}
