<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class courseListController extends Controller
{
    public function index()
    {
        $data = course::all();
        return view('courseList', [
            'title' => "Course List",
            'data' => $data,
            'data2' => $data,
        ]);
    }
}
