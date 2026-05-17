<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

public function index() {
    return view('auth.login'); // Pastikan path file view login kamu benar
}
    // Menampilkan halaman login
    public function loginForm()
    {
        return view('auth.login'); // Pastikan nanti kamu buat file resources/views/auth/login.blade.php
    }

    // Proses Autentikasi
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

      if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        // Logika pemisahan halaman berdasarkan role
        if (Auth::user()->role === 'admin') {
            return redirect()->intended('/admin/dashboard');
        }

        return redirect()->intended('/customer/dashboard');
    }

        return back()->withErrors([
            'email' => 'Email atau password salah!',
        ])->onlyInput('email');
    }

    // Proses Logout
// app/Http/Controllers/AuthController.php

public function logout(Request $request)
{
    // Menghapus sesi login user
    auth()->logout();

    // Menghancurkan session agar tidak bisa dipakai lagi
    $request->session()->invalidate();

    // Membuat ulang token CSRF baru demi keamanan
    $request->session()->regenerateToken();

    // Lempar balik ke halaman utama (landing page)
    return redirect('/');
}
}