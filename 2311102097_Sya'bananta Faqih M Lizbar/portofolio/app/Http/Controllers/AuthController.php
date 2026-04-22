<?php

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if ($request->username == 'admin' && $request->password == '123') {
            session(['is_admin' => true]);
            return redirect('/dashboard');
        }

        return back()->with('error', 'Login gagal');
    }

    public function logout()
    {
        session()->forget('is_admin');
        return redirect('/login');
    }
}
