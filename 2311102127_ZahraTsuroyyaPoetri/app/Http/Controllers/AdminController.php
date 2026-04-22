<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $products = Products::all();
        return view('products.index', ['products' => $products]);
        
    }

    public function create()
    {
        return view('products.form', [
            'title' => 'Tambah',
            'product' => new Products(),
            'route' => route('products.store'),
            'method' => 'POST',
            ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:4',
            'price' => 'required|integer|min:1000000',
            ]);

            Products::create($validated);
            return redirect()->route('products.index')->with('success', 'Profile berhasil
            ditambahkan');
    }

    public function show(string $id)
    {
        return view('products.show', compact('product'));
    }

    public function edit(string $id)
    {
        return view('products.form', [
            
            'title' => 'Edit',
            'product' => $products,
            'route' => route('products.update', $products),
            'method' => 'PUT',
        ]);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:4',
            'price' => 'required|integer|min:1000000',
            ]);
            
            Products::update($validated);
            return redirect()->route('products.index')->with('success', 'Profile berhasil
            diupdate');
    }
    
    public function destroy(string $id)
    {
        Products::delete();
        return redirect()->route('products.index')->with('success', 'Profile berhasil
        dihapus');
    }
}
