<?php

namespace App\Http\Controllers;

use App\Models\Porto;
use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index() {
        $portos = Porto::all();
        return view('welcome', compact('portos'));
    }
}
