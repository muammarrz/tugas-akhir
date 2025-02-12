<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // Menampilkan form registrasi
    public function showRegisterForm()
    {
        return view('register');
    }

    // Proses registrasi
    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'name' => 'required|string|unique:users,name',
            'password' => 'required|string|confirmed|min:6',  // Confirm password
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Hash password
        $hashedPassword = Hash::make($request->password);

        // Simpan user ke database
        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => $hashedPassword,
        ]);

        // Redirect ke halaman login setelah registrasi sukses
        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
