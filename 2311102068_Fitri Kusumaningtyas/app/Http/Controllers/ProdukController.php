<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
{
    $produk = Produk::all();
    return view('produk.index', compact('produk'));
}

public function create()
{
    return view('produk.create');
}

public function store(Request $request)
{
    Produk::create($request->all());
    return redirect('/');
}
}