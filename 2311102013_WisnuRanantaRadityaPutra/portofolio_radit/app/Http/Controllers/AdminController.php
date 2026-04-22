<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Skill;

class AdminController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $skills = Skill::all();
        return view('admin', compact('profile', 'skills'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'description' => 'required',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validasi foto
        ]);

        $profile = \App\Models\Profile::first() ?? new \App\Models\Profile();

        // Logika Upload Foto
        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($profile->photo && \Storage::exists('public/' . $profile->photo)) {
                \Storage::delete('public/' . $profile->photo);
            }

            // Simpan foto baru ke folder storage/app/public/photos
            $path = $request->file('photo')->store('photos', 'public');
            $profile->photo = $path;
        }

        $profile->name = $request->name;
        $profile->role = $request->role;
        $profile->description = $request->description;
        $profile->save();

        return redirect()->back()->with('success', 'Profile & Photo updated successfully!');
    }

    public function addSkill(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'percentage' => 'required|numeric|min:1|max:100',
        ]);

        Skill::create([
            'name' => $request->name,
            'percentage' => $request->percentage,
        ]);

        return redirect()->back()->with('success', 'Skill added successfully!');
    }
}
