<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login.index');
    }

    public function cekLogin(Request $request)
    {
        $cek = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($cek)) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        }
    }

    public function cekLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/login');
    }
}
