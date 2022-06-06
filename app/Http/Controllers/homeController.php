<?php

namespace App\Http\Controllers;
use App\Models\course;
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
        $data = course::all();
        return view('/home', [
            'title' => "Home",
            'data' => $data
        ]);
    }
}
