<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function show()
    {
        $profile = Profile::first();
        return response()->json($profile);
    }

    public function update(Request $request)
    {
        $profile = Profile::first();

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'skills' => $request->skills,
        ];

        // Upload foto jika ada
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('photos', 'public');
        }

        if (!$profile) {
            Profile::create($data);
        } else {
            $profile->update($data);
        }

        return response()->json(['message' => 'updated']);
    }
}