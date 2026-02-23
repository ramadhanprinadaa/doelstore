<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            $role = Auth::user()->role;

            return match ($role) {
                'admin' => redirect('/admin'),
                'investor' => redirect('/investor'),
                default => redirect('/tamu'),
            };
        }

        return back()->withErrors([
            'email' => 'Login gagal!'
        ]);
    }
}