<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievement;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements = Achievement::all();
        return view('achievements.index', compact('achievements'));
    }

    public function store(Request $request)
    {
        Achievement::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect('/achievements');
    }

    public function destroy(string $id)
    {
        Achievement::destroy($id);
        return redirect('/achievements');
    }
}