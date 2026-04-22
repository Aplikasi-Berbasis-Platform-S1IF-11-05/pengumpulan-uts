<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Skill;

class PortfolioController extends Controller
{
    public function index()
    {
        return response()->json([
            'profile' => Profile::first(),
            'skills' => Skill::all()
        ]);
    }
}
