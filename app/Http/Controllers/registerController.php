<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => "Register"
        ]);
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'name' => 'required|max:32',
            'username' => 'required|max:32',
            'email' => 'required|email',
            'password' => 'required',
            'is_active' => 'required',
        ]);

        /* $validateData['password'] = bcrypt($validateData['password']); */
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('success', 'Registration Success!');;
    }
}
