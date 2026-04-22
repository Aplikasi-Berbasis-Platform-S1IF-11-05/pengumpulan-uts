<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'type' => 'required',
        ]);

        Book::create($request->only(['title', 'author', 'type']));

        return redirect('/books')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Book $book)
    {
        return view('books.form', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'type' => 'required',
        ]);

        $book->update($request->only(['title', 'author', 'type']));

        return redirect('/books')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/books')->with('success', 'Data berhasil dihapus');
    }
}