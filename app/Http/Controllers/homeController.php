<?php

namespace App\Http\Controllers;
use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\module;
use App\Models\requirement;
use App\Models\resources;
use App\Models\studentcourse;
use App\Models\teacher;
use App\Models\completedmodule;

class homeController extends Controller
{
    public function index()
    {
        $data = course::all();
        $data2 = DB::table('courses')
            ->join('studentcourses', 'course_id', '=', 'courses.id')
            ->selectRaw('courses.* , SUM(user_id) as total')
            ->groupBy('courses.id', 'courses.name', 'courses.desc', 'courses.is_active', 'courses.created_at', 'courses.updated_at')
            ->orderByRaw('SUM(user_id) DESC')
            ->get();
       /*  $datastudentcourse = studentcourse::all(); */

        $user = Auth::user();
        return view('user.home', [
            'title' => "Home",
            'data' => $data,
            'user' => $user,
            'datatop' => $data2,
            /* 'datastudentcourse' => $datastudentcourse, */
        ]);
    }

    public function home()
    {
        $data = course::all();
        $data2 = DB::table('courses')
            ->join('studentcourses', 'course_id', '=', 'courses.id')
            ->selectRaw('courses.* , SUM(user_id) as total')
            ->groupBy('courses.id', 'courses.name', 'courses.desc', 'courses.is_active', 'courses.created_at', 'courses.updated_at')
            ->orderByRaw('SUM(user_id) DESC')
            ->get();
        /* $datastudentcourse = studentcourse::all(); */

        return view('/home', [
            'title' => "Home",
            'data' => $data,
            'datatop' => $data2,
            /* 'datastudentcourse' => $datastudentcourse, */
        ]);
    }

}
