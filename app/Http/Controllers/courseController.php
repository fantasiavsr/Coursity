<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\user;
use App\Models\coursedetail;
use App\Models\module;
use App\Models\requirement;
use App\Models\resources;
use App\Models\studentcourse;
use App\Models\teacher;

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

    public function coursedetail(course $course)
    {
        /* $data = course::all(); */
        $id = $course->id;
        /* $data = coursedetail::whereIn('course_id', [$id])->get(); */
        /* $data = course::whereIn('id', [$id])->get(); */
        $datacourse = course::find($id);
        $datateacher = teacher::whereIn('course_id', [$id])->get();
        $datamodule = module::whereIn('course_id', [$id])->get();
        $datarequirement = requirement::whereIn('course_id', [$id])->get();
        $dataresource = resources::whereIn('course_id', [$id])->get();
        $datastudentcourse = studentcourse::whereIn('course_id', [$id])->get();

        return view('coursedetail', [
            'title' => "Course Detail",
            /* 'id' => $request->id, */
            'datacourse' => $datacourse,
            'datateacher' => $datateacher,
            'datamodule' => $datamodule,
            'datarequirement' => $datarequirement,
            'dataresource' => $dataresource,
            'datastudentcourse' => $datastudentcourse,

        ]);
    }

}
