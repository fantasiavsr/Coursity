<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\user;
use App\Models\coursedetail;
use App\Models\module;
use App\Models\requirement;
use App\Models\resources;
use App\Models\studentcourse;
use App\Models\teacher;
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

    public function user()
    {
        /* $data = course::all(); */
        $data = course::whereIn('is_active', ['yes'])->get();

        return view('user.courseList', [
            'title' => "Course List",
            'data' => $data,
            'data2' => $data,
        ]);
    }
}
