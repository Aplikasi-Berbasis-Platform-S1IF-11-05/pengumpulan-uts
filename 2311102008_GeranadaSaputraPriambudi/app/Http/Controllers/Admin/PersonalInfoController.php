<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personalInfo = \App\Models\PersonalInfo::first();
        if (!$personalInfo) {
            $personalInfo = \App\Models\PersonalInfo::create([]);
        }
        return redirect()->route('admin.personal-info.edit', $personalInfo->id);
    }

    public function edit(string $id)
    {
        $personalInfo = \App\Models\PersonalInfo::findOrFail($id);
        return view('admin.personal-info.edit', compact('personalInfo'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'required|string',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'linkedin' => 'nullable|string|max:255',
            'education' => 'required|string',
        ]);

        $personalInfo = \App\Models\PersonalInfo::findOrFail($id);
        $personalInfo->update($request->all());

        return redirect()->route('admin.dashboard')->with('success', 'Personal info updated successfully.');
    }
}
