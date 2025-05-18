<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LogindanReg extends Controller
{
    public function login(){
    return view('Login&Reg.login');
    }

    public function simpanLogin(Request $request){
        $login = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:7|max:255'
        ]);

        if (auth()->attempt($login)) {
            return redirect('/dashboard')->with('success', 'Login berhasil!');
        }

        return redirect('/login')->with('error', 'Email atau password salah!');
    }

    public function registrasi(){
        return view('Login&Reg.Reg');
    }

   public function simpanRegistrasi(Request $request) {
    $validated = $request->validate([
        'name' => ['required', 'string', 'min:5', 'max:255'],
        'email' => ['required', 'email', 'unique:users'],
        'password' => ['required', 'confirmed', 'min:7', 'max:255']
    ]);

    User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => bcrypt($validated['password'])
    ]);

    return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login');
}
}
