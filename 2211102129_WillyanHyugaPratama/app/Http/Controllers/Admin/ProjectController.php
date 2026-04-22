<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'role' => 'nullable',
            'year' => 'nullable',
            'type' => 'required|in:project,achievement',
        ]);

        Project::create($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project/Achievement created successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'role' => 'nullable',
            'year' => 'nullable',
            'type' => 'required|in:project,achievement',
        ]);

        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project/Achievement updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project/Achievement deleted successfully.');
    }
}
