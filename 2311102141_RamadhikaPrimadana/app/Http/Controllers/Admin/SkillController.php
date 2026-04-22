<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    // 1. Menampilkan tabel daftar skill
    public function index()
    {
        $skills = Skill::all();
        return view('admin.skills.index', compact('skills'));
    }

    // 2. Menampilkan halaman form tambah skill (INI YANG TADI HILANG/BELUM TERSIMPAN)
    public function create()
    {
        return view('admin.skills.create');
    }

    // 3. Menyimpan data dari form ke database
    public function store(Request $request)
    {
        // Validasi data yang masuk
        $request->validate([
            'nama_skill' => 'required|string|max:255',
            'persentase' => 'required|integer|min:1|max:100',
        ]);

        // Simpan ke database
        Skill::create($request->all());

        // Arahkan kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.skills.index')->with('success', 'Skill baru berhasil ditambahkan!');
    }

    // 4. Menghapus data skill
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('admin.skills.index')->with('success', 'Skill berhasil dihapus!');
    }
}