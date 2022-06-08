<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class courseListController extends Controller
{
    public function index()
    {
        /* $data = course::all(); */
        $data = course::whereIn('is_active', ['yes'])->get();
        return view('courseList', [
            'title' => "Course List",
            'data' => $data,
            'data2' => $data,
        ]);
    }
}
