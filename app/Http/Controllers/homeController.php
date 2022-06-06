<?php

namespace App\Http\Controllers;
use App\Models\course;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $data = course::all();
        return view('user.home', [
            'title' => "Home",
            'data' => $data,
        ]);
    }

    public function home()
    {
        $data = course::all();
        return view('/home', [
            'title' => "Home",
            'data' => $data,
        ]);
    }
}
