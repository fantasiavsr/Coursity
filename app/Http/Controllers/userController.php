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
use App\Models\completedmodule;

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

    public function myprofile()
    {
        $user = Auth::user();
        return view('user.myprofile', [
            'title' => "My Profile",
            'user' => $user,
        ]);
    }

    public function myprofileupdate(Request $request)
    {
        $user = Auth::user();
        $authid = $user->id;

        $user =user::find($authid->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/myprofile');
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

    public function markcompleted(Request $request)
    {
        $validateData = $request->validate([
            'course_id' => 'required',
            'user_id' => 'required',
            'module_step' => 'required',
        ]);

        // $validateData['password'] = bcrypt($validateData['password']);
        /* $validateData['password'] = Hash::make($validateData['password']); */

        completedmodule::create($validateData);

        return redirect(url()->previous())->with('success', 'Success!');;
    }

    public function markincomplete(Request $request)
    {
        /* dd($request->all()); */
        completedmodule::where('course_id', $request->course_id)
            ->where('user_id', $request->user_id)
            ->where('module_step', $request->module_step)
            ->delete();
        return redirect(url()->previous())->with('success', 'Success!');;
    }
}
