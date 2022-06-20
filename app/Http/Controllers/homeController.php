<?php

namespace App\Http\Controllers;
use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function index()
    {
        $data = course::all();
        $user = Auth::user();
        return view('user.home', [
            'title' => "Home",
            'data' => $data,
            'user' => $user
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
