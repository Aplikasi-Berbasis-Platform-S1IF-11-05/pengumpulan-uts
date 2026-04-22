<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        return view('profile.index', compact('profile'));
    }

    public function store(Request $request)
    {
        Profile::updateOrCreate(
            ['id' => 1],
            [
                'name' => $request->name,
                'bio' => $request->bio
            ]
        );

        return redirect('/profile');
    }
}