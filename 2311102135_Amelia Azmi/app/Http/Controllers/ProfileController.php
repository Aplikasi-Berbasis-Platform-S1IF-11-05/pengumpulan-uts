<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Achievement;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $skills = Skill::all();
        $achievements = Achievement::all();

        return view('welcome', compact('profile', 'skills', 'achievements'));
    }

    public function create()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {
        Profile::create($request->all());
        return redirect('/profile')->with('success', 'Data berhasil ditambah');
    }

    public function show(Profile $profile)
    {
        return view('profile.show', compact('profile'));
    }

    public function edit(Profile $profile)
    {
        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
    {
        $profile->update($request->all());
        return redirect('/profile')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect('/profile')->with('success', 'Data berhasil dihapus');
    }
}