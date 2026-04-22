<?php

namespace App\Http\Controllers;

use App\Models\DataDiri;
use App\Models\Skill;
use App\Models\Pencapaian;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $dataDiri = DataDiri::first();
        $skillsCount = Skill::count();
        $pencapaianCount = Pencapaian::count();

        return view('admin.dashboard', compact('dataDiri', 'skillsCount', 'pencapaianCount'));
    }

    public function dataDiriIndex()
    {
        $dataDiri = DataDiri::first();
        return view('admin.data-diri.index', compact('dataDiri'));
    }

    public function dataDiriEdit()
    {
        $dataDiri = DataDiri::first() ?? new DataDiri();
        return view('admin.data-diri.edit', compact('dataDiri'));
    }

    public function dataDiriUpdate(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
            'bio' => 'nullable|string',
            'photo_url' => 'nullable|url',
            'github_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
        ]);

        $dataDiri = DataDiri::first();
        if ($dataDiri) {
            $dataDiri->update($validated);
        } else {
            DataDiri::create($validated);
        }

        return redirect()->route('admin.data-diri.index')->with('success', 'Data pribadi berhasil diperbarui!');
    }

    public function skillIndex()
    {
        $dataDiri = DataDiri::first();
        $skills = $dataDiri ? $dataDiri->skills()->get() : [];

        return view('admin.skill.index', compact('skills', 'dataDiri'));
    }

    public function skillCreate()
    {
        return view('admin.skill.create');
    }

    public function skillStore(Request $request)
    {
        $dataDiri = DataDiri::first();
        if (!$dataDiri) {
            return back()->with('error', 'Silakan isi data pribadi terlebih dahulu.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|in:Beginner,Intermediate,Advanced,Expert',
            'category' => 'nullable|string|max:100',
        ]);

        $validated['data_diri_id'] = $dataDiri->id;
        Skill::create($validated);

        return redirect()->route('admin.skill.index')->with('success', 'Skill berhasil ditambahkan!');
    }

    public function skillEdit(Skill $skill)
    {
        return view('admin.skill.edit', compact('skill'));
    }

    public function skillUpdate(Request $request, Skill $skill)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|in:Beginner,Intermediate,Advanced,Expert',
            'category' => 'nullable|string|max:100',
        ]);

        $skill->update($validated);

        return redirect()->route('admin.skill.index')->with('success', 'Skill berhasil diperbarui!');
    }

    public function skillDestroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('admin.skill.index')->with('success', 'Skill berhasil dihapus!');
    }

    public function pencapaianIndex()
    {
        $dataDiri = DataDiri::first();
        $pencapaians = $dataDiri ? $dataDiri->pencapaians()->latest('date')->get() : [];

        return view('admin.pencapaian.index', compact('pencapaians', 'dataDiri'));
    }

    public function pencapaianCreate()
    {
        return view('admin.pencapaian.create');
    }

    public function pencapaianStore(Request $request)
    {
        $dataDiri = DataDiri::first();
        if (!$dataDiri) {
            return back()->with('error', 'Silakan isi data pribadi terlebih dahulu.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'category' => 'nullable|string|max:100',
        ]);

        $validated['data_diri_id'] = $dataDiri->id;
        Pencapaian::create($validated);

        return redirect()->route('admin.pencapaian.index')->with('success', 'Pencapaian berhasil ditambahkan!');
    }

    public function pencapaianEdit(Pencapaian $pencapaian)
    {
        return view('admin.pencapaian.edit', compact('pencapaian'));
    }

    public function pencapaianUpdate(Request $request, Pencapaian $pencapaian)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'category' => 'nullable|string|max:100',
        ]);

        $pencapaian->update($validated);

        return redirect()->route('admin.pencapaian.index')->with('success', 'Pencapaian berhasil diperbarui!');
    }

    public function pencapaianDestroy(Pencapaian $pencapaian)
    {
        $pencapaian->delete();
        return redirect()->route('admin.pencapaian.index')->with('success', 'Pencapaian berhasil dihapus!');
    }
}
