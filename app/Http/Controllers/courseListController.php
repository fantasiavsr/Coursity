<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\user;
/* use App\Models\coursedetail; */
use App\Models\module;
use App\Models\requirement;
use App\Models\resources;
use App\Models\studentcourse;
use App\Models\teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\profile;

class courseListController extends Controller
{
    public function index()
    {
        /* $data = course::all(); */
        $data = course::whereIn('is_active', ['yes'])->get();
        /* $data2 = course::whereIn('is_active', ['yes'])->get(); */

        $data2 = DB::table('courses')
            ->join('studentcourses', 'course_id', '=', 'courses.id')
            ->selectRaw('courses.* , SUM(user_id) as total')
            ->groupBy('courses.id', 'courses.name', 'courses.desc', 'courses.is_active', 'courses.created_at', 'courses.updated_at')
            ->orderByRaw('SUM(user_id) DESC')
            ->get();

        /* $datastudentcourse = studentcourse::all(); */

        return view('courseList', [
            'title' => "Course List",
            'data' => $data,
            'data2' => $data,
            'datatop' => $data2,
            /* 'datastudentcourse' => $datastudentcourse, */
        ]);
    }

    public function user()
    {
        /* $data = course::all(); */
        $data = course::whereIn('is_active', ['yes'])->get();
        $user = Auth::user();

        $data2 = DB::table('courses')
            ->join('studentcourses', 'course_id', '=', 'courses.id')
            ->selectRaw('courses.* , SUM(user_id) as total')
            ->groupBy('courses.id', 'courses.name', 'courses.desc', 'courses.is_active', 'courses.created_at', 'courses.updated_at')
            ->orderByRaw('SUM(user_id) DESC')
            ->get();

        $userpp = profile::where('user_id', $user->id)->first();

        return view('user.courseList', [
            'title' => "Course List",
            'data' => $data,
            'data2' => $data,
            'user' => $user,
            'datatop' => $data2,
            'userpp' => $userpp,
        ]);
    }
}
