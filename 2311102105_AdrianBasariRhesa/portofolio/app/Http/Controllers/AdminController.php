<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Achievement;

class AdminController extends Controller
{
    // --- AUTHENTICATION ---
    public function showLogin() {
        return view('login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/admin/dashboard');
        }
        return back()->with('error', 'Email atau Password salah.');
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }

    // --- DASHBOARD ---
    public function dashboard() {
        $profile = Profile::first();
        $skills = Skill::all();
        $achievements = Achievement::all();
        return view('admin.dashboard', compact('profile', 'skills', 'achievements'));
    }

    // --- CRUD PROFILE ---
    public function updateProfile(Request $request) {
        $profile = Profile::first();
        $profile->update($request->all());
        return back()->with('success', 'Profile berhasil diupdate!');
    }

    // --- CRUD SKILL ---
    public function storeSkill(Request $request) {
        Skill::create($request->all());
        return back()->with('success', 'Skill ditambahkan!');
    }
    public function deleteSkill($id) {
        Skill::findOrFail($id)->delete();
        return back()->with('success', 'Skill dihapus!');
    }

    // --- CRUD ACHIEVEMENT ---
    public function storeAchievement(Request $request) {
        Achievement::create($request->all());
        return back()->with('success', 'Achievement ditambahkan!');
    }
    public function deleteAchievement($id) {
        Achievement::findOrFail($id)->delete();
        return back()->with('success', 'Achievement dihapus!');
    }
}