<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            // 'email' => 'required|email:dns',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); //Menghindari teknik hacking session fixation
            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->with([
            'loginError' => 'Login failed!',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); //matiin session
        $request->session()->regenerateToken(); //generate token baru
        return redirect('/');
    }
}
