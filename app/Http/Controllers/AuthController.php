<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show_signin()
    {
        return view('auth.sign-in');
    }

    public function show_signup()
    {
        return view('auth.sign-up');
    }

    public function signin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'no_telp' => 'required|string|unique:users,no_telp',
            'pekerjaan' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        Users::create([
            'nama' => $request->nama,
            'no_telp' => $request->no_telp,
            'pekerjaan' => $request->pekerjaan,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/')->with('success', 'Registrasi berhasil');
        ;
    }


}