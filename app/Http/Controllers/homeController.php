<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view('user.home', [
            'title' => "Home"
        ]);
    }

    public function home()
    {
        return view('/home', [
            'title' => "Home"
        ]);
    }
}
