<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email|string',  // Ganti 'username' menjadi 'email'
            'password' => 'required|string',
        ]);

        // Cek apakah kredensial sesuai
        $user = User::where('email', $request->email)->first();  // Ganti 'username' menjadi 'email'

        if ($user && Hash::check($request->password, $user->password)) {
            // Set session user jika login berhasil
            session(['user_id' => $user->id]);

            // Redirect berdasarkan role atau halaman default (ganti dengan route yang sesuai)
            return redirect()->route('welcome');
        } else {
            return back()->withErrors(['error' => 'Email atau password salah!']);
        }
    }
}
