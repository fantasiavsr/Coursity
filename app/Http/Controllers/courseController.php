<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class courseController extends Controller
{
    public function index()
    {
        /* $data = course::all(); */
       /*  $data = course::whereIn('is_active', ['yes'])->get(); */
        return view('coursedetail', [
            'title' => "Course Detail",
            /* 'data' => $data, */
        ]);
    }
}
