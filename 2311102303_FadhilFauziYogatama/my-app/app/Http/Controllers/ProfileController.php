<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Tampilkan profile di frontend (home)
     */
    public function show()
    {
        $profile = Profile::first();

        return view('frontend.home', compact('profile'));
    }

    /**
     * Form edit profile di admin
     */
    public function edit()
    {
        $profile = Profile::first();

        return view('admin.profile.edit', compact('profile'));
    }

    /**
     * Update data profile
     */
    public function update(Request $request)
    {
        $profile = Profile::first();

        $request->validate([
            'nama' => 'required',
            'asal' => 'required',
            'sekolah' => 'required',
            'tanggal_lahir' => 'required|date',
            'deskripsi' => 'nullable'
        ]);

        $profile->update([
            'nama' => $request->nama,
            'asal' => $request->asal,
            'sekolah' => $request->sekolah,
            'tanggal_lahir' => $request->tanggal_lahir,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/dashboard')->with('success', 'Profile berhasil diupdate');
    }
}