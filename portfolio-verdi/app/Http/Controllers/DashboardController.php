<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Achievement;

class DashboardController extends Controller
{
    // Menampilkan halaman dashboard dengan data saat ini
    public function index()
    {
        $profile = Profile::first();
        $skills = Skill::all();
        $achievements = Achievement::all();
        
        return view('dashboard', compact('profile', 'skills', 'achievements'));
    }

    // Update Data Diri
    public function updateProfile(Request $request)
    {
        $profile = Profile::first();
        if ($profile) {
            $profile->update($request->all());
        } else {
            Profile::create($request->all());
        }
        return back()->with('success', 'Data diri berhasil diupdate!');
    }

    // Tambah Skill Baru
    public function storeSkill(Request $request)
    {
        Skill::create($request->all());
        return back()->with('success', 'Skill berhasil ditambahkan!');
    }

    // Hapus Skill
    public function destroySkill($id)
    {
        Skill::find($id)->delete();
        return back()->with('success', 'Skill berhasil dihapus!');
    }

    // Tambah Achievement Baru
    public function storeAchievement(Request $request)
    {
        Achievement::create($request->all());
        return back()->with('success', 'Achievement berhasil ditambahkan!');
    }

    // Hapus Achievement
    public function destroyAchievement($id)
    {
        Achievement::find($id)->delete();
        return back()->with('success', 'Achievement berhasil dihapus!');
    }
}