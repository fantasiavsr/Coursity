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
use App\Models\profile;

class userController extends Controller
{
    public function mycourse()
    {
        $user = Auth::user();
        /* $studentcourses = studentcourse::where('user_id', $user->id)->get(); */
        $courses = course::select('*')
            ->join('studentcourses', 'courses.id', '=', 'studentcourses.course_id')
            ->where('studentcourses.user_id', $user->id)
            ->whereIn('is_active', ['yes'])
            ->get();
        /* $data = $courses;
        $data2 = $courses; */
        $userpp = profile::where('user_id', $user->id)->first();

        return view('user.mycourse', compact('courses'), [
            'title' => "My Courses",
            /* 'data' => $data, */
            /* 'data2' => $data2, */
            'user' => $user,
            'userpp' => $userpp,
        ]);
    }

    public function profile()
    {
        $user = Auth::user();
        $userpp = profile::where('user_id', $user->id)->first();
        /* $studentcourses = studentcourse::where('user_id', $user->id)->get(); */
        $courses = course::select('*')
            ->join('studentcourses', 'courses.id', '=', 'studentcourses.course_id')
            ->where('studentcourses.user_id', $user->id)
            ->whereIn('is_active', ['yes'])
            ->get();

        return view('user.userprofile', [
            'title' => "My Profile",
            'user' => $user,
            'courses' => $courses,
            'userpp' => $userpp
        ]);
    }

    public function editprofile(Request $request)
    {
        $user = Auth::user();
        $userpp = profile::where('user_id', $user->id)->first();
        return view('user.edit.edituser', [
            'title' => "My Profile",
            'id' => $request->id,
            'data' => user::find($request->id),
            'user' => Auth::user(),
            'userpp' => $userpp
        ]);
    }

    public function ubahdataUser(Request $request)
    {
        $flights = user::find($request->id);
        $flights->name = $request->name;
        $flights->email = $request->email;

        $flights->save();

        return redirect('/userprofile');
    }

    public function editpp(Request $request)
    {
        $user = Auth::user();
        $userpp = profile::where('user_id', $user->id)->first();
        return view('user.edit.userpp', [
            'title' => "My Profile",
            'id' => $request->id,
            'data' => user::find($request->id),
            'user' => Auth::user(),
            'userpp' => $userpp,
        ]);
    }

    public function ubahpp(Request $request)
    {

        $validateData = $request->validate([
            'user_id' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $fileName = $request->file->getClientOriginalName();
        $request->file->move(public_path('uploads/profile'), $fileName);
        $validateData['file'] =  $fileName;

        $data = profile::where('user_id', $request->user_id)->first();
        if ($data) {
            $data->update($validateData);
        } else {
            profile::create($validateData);
        }

        /* profile::create($validateData); */

        return redirect('/userprofile')->with('success', 'Added Successfully!');;

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
