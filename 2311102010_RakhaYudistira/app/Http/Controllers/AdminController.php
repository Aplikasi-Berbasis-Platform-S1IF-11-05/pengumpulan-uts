<?php

namespace App\Http\Controllers;

use App\Models\Porto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index() {
        $portos = Porto::all();
        return view('admin.index', compact ('portos'));
    }

    public function store(Request $request) {
        $data = $request->all();
        Porto::create($data);
        return back()->with('success', 'Skilll berhasil ditambah!');
    }

    public function update(Request $request, Porto $admin) {
        $data = $request->all();
        $admin->update($data);
        return back()->with('success', 'Skill berhasil diupdate!');
    }

    public function destroy(Porto $admin) {
        $admin->delete();
        return back()->with('success', 'Skill berhasil dihapus!');
    }
}