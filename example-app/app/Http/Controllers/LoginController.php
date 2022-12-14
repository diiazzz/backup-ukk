<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            if (auth()->user()->is_admin) {
                return redirect('/dashboard');
            } else {
                return redirect()->intended('/');
            }
        }

        return back()->with('error', 'Login gagal, cek email atau password kembali!');
    }

    public function logout(Request $request) {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login')->with('success', 'Anda berhasil logout!');
    }
}
