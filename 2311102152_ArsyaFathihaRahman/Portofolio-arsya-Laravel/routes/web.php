<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BookController;
use App\Models\Book;

// 👉 LOGIN PAGE (JADI HALAMAN AWAL)
Route::get('/', function () {
    if (session('login')) {
        return redirect('/portfolio');
    }
    return view('login');
});

// 👉 PROSES LOGIN
Route::post('/login', function (Request $request) {
    if ($request->email == 'admin@gmail.com' && $request->password == '123') {
        session(['login' => true]);
        return redirect('/portfolio');
    }
    return back()->with('error', 'Login gagal');
});

// 👉 LOGOUT
Route::get('/logout', function () {
    session()->forget('login');
    return redirect('/');
});

// 👉 PORTFOLIO (HARUS LOGIN)
Route::get('/portfolio', function () {
    if (!session('login')) {
        return redirect('/');
    }
    return view('portfolio', [
        'data' => Book::all()
    ]);
});

// 👉 ADMIN / CRUD (HARUS LOGIN)
Route::get('/books', function () {
    if (!session('login')) {
        return redirect('/');
    }
    return app(BookController::class)->index();
});

// route CRUD lainnya
Route::resource('books', BookController::class)->except(['index']);