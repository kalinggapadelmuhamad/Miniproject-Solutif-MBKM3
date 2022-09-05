<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentsLogin extends Controller
{
    public function index()
    {
        return view('Login.student.index');
    }

    public function cekLogin(Request $request)
    {
        $cek = $request->validate([
            'nim' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($cek)) {
            $request->session()->regenerate();
            return redirect('/dashboard/student');
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
