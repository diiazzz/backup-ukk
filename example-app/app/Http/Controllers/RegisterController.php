<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);
        return redirect('/login');
    }
}
