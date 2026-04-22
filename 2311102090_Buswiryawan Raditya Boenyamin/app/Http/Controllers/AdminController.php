<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Profile CRUD
    public function profile()
    {
        $profile = Profile::first();
        return view('admin.profile', compact('profile'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'about_me' => 'required',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $profile = Profile::first();
        $data = $request->except('profile_picture');

        if ($request->hasFile('profile_picture')) {
            // Hapus foto lama jika ada
            if ($profile->profile_picture) {
                Storage::disk('public')->delete($profile->profile_picture);
            }
            
            // Simpan foto baru
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $data['profile_picture'] = $path;
        }

        $profile->update($data);

        return back()->with('success', 'Profile updated successfully.');
    }

    // Skills CRUD
    public function skills()
    {
        $skills = Skill::all();
        return view('admin.skills', compact('skills'));
    }

    public function storeSkill(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'level' => 'required|integer|min:0|max:100',
        ]);

        Skill::create($request->all());
        return back()->with('success', 'Skill added successfully.');
    }

    public function updateSkill(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => 'required',
            'level' => 'required|integer|min:0|max:100',
        ]);

        $skill->update($request->all());
        return back()->with('success', 'Skill updated successfully.');
    }

    public function destroySkill(Skill $skill)
    {
        $skill->delete();
        return back()->with('success', 'Skill deleted successfully.');
    }

    // Achievements CRUD
    public function achievements()
    {
        $achievements = Achievement::all();
        return view('admin.achievements', compact('achievements'));
    }

    public function storeAchievement(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required|date',
        ]);

        Achievement::create($request->all());
        return back()->with('success', 'Achievement added successfully.');
    }

    public function updateAchievement(Request $request, Achievement $achievement)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required|date',
        ]);

        $achievement->update($request->all());
        return back()->with('success', 'Achievement updated successfully.');
    }

    public function destroyAchievement(Achievement $achievement)
    {
        $achievement->delete();
        return back()->with('success', 'Achievement deleted successfully.');
    }

    // Change Password
    public function showPasswordForm()
    {
        return view('admin.change-password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        if (!\Hash::check($request->current_password, auth()->user()->password)) {
            return back()->withErrors(['current_password' => 'Password saat ini salah.']);
        }

        auth()->user()->update([
            'password' => \Hash::make($request->new_password)
        ]);

        return back()->with('success', 'Password berhasil diganti!');
    }
}
