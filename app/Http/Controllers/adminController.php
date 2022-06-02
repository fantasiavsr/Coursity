<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function index()
    {
        return view('admin/index', [
            'title' => "Admin",
            'submenu' => "No"
        ]);
    }

    public function login()
    {
        return view('admin/login', [
            'title' => "Admin Login",
            'submenu' => "No"
        ]);
    }

    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }
        // dd('Invalid credentials');
        return back()->with('Login Error');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }


}
