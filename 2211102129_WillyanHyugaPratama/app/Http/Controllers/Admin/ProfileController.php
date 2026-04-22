<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        return view('admin.profile', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
    {
        $data = $request->validate([
            'name' => 'required',
            'bio' => 'required',
            'email' => 'nullable|email',
            'location' => 'nullable',
        ]);

        $profile->update($data);

        return redirect()->route('admin.profile.index')->with('success', 'Profile updated successfully.');
    }
}
