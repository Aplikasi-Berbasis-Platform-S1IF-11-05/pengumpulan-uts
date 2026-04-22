<?php

namespace App\Http\Controllers;

use App\Models\DataDiri;
use App\Models\Skill;
use App\Models\Pencapaian;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $dataDiri = DataDiri::first() ?? new DataDiri();
        $skills = Skill::where('data_diri_id', $dataDiri->id ?? 0)->get();
        $pencapaians = Pencapaian::where('data_diri_id', $dataDiri->id ?? 0)->get();

        return view('portfolio.index', compact('dataDiri', 'skills', 'pencapaians'));
    }
}
