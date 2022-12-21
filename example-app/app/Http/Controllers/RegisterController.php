<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'no_hp' => 'required|min:0|numeric',
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        $data['password'] = bcrypt($data['password']);
        
        $user = User::create($data);

        if ($user) {
            return redirect()->route('login')->with('success', 'Registrasi berhasil!, Silahkan Login');
        } else {
            return redirect()->route('login')->with('error', 'Registrasi gagal!, Harap Registrasi Kembali');
        }
    }
}
