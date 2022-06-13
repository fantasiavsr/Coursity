<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\course;
use App\Models\user;
use App\Models\coursedetail;
use App\Models\module;
use App\Models\requirement;
use App\Models\resources;
use App\Models\studentcourse;
use App\Models\teacher;

class userController extends Controller
{
    public function mycourse()
    {
        $user = Auth::user();
        /* $studentcourses = studentcourse::where('user_id', $user->id)->get(); */
        $courses = course::select('*')
            ->join('studentcourses', 'courses.id', '=', 'studentcourses.course_id')
            ->where('studentcourses.user_id', $user->id)
            ->get();
        /* $data = $courses;
        $data2 = $courses; */

        return view('user.mycourse', compact('courses'), [
            'title' => "My Courses",
            /* 'data' => $data, */
            /* 'data2' => $data2, */
        ]);
    }

    public function enroll(Request $request)
    {
        $validateData = $request->validate([
            'course_id' => 'required',
            'user_id' => 'required',
        ]);

        // $validateData['password'] = bcrypt($validateData['password']);
        /* $validateData['password'] = Hash::make($validateData['password']); */

        studentcourse::create($validateData);

        return redirect(url()->previous())->with('success', 'Success!');;
    }
}
