<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievement;

class AchievementController extends Controller
{
    // FRONTEND
    public function indexPublic()
    {
        $achievements = Achievement::all();
        return view('frontend.achievement', compact('achievements'));
    }

    // ADMIN
    public function index()
    {
        $achievements = Achievement::all();
        return view('admin.achievements.index', compact('achievements'));
    }

    public function create()
    {
        return view('admin.achievements.create');
    }

    public function store(Request $request)
    {
        Achievement::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal
        ]);

        return redirect()->route('achievements.index');
    }

    public function edit($id)
    {
        $achievement = Achievement::findOrFail($id);
        return view('admin.achievements.edit', compact('achievement'));
    }

    public function update(Request $request, $id)
    {
        $achievement = Achievement::findOrFail($id);

        $achievement->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal
        ]);

        return redirect()->route('achievements.index');
    }

    public function destroy($id)
    {
        Achievement::destroy($id);
        return redirect()->route('achievements.index');
    }
}