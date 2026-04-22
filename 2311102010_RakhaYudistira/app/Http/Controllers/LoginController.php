<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 1. Cari user berdasarkan email saja
        $user = User::where('email', $request->email)->first();

        // 2. Cek apakah user ada dan password-nya cocok (teks biasa)
        if ($user && $user->password === $request->password) {
            // 3. Jika cocok, login-kan user secara manual
            Auth::login($user);
            
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        // Jika gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}