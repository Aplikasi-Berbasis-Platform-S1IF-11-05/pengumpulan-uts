<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // tampilkan form login
    public function form() {
        return view('login');
    }

    // proses login
    public function login(Request $request) {

        // validasi sederhana
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // login manual
        if ($request->email == 'admin@gmail.com' && $request->password == '123') {
            session(['login' => true]);
            return redirect('/dashboard');
        }

        return back()->with('error', 'Login gagal');
    }

    // dashboard (PROTEKSI LOGIN)
    public function dashboard() {

        if (!session('login')) {
            return redirect('/login');
        }

        return view('dashboard');
    }

    // logout
    public function logout() {
        session()->forget('login');
        return redirect('/login');
    }
}

