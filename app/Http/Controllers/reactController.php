<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class reactController extends Controller
{
    public function test()
    {
        $course = course::all();

        return view('test', [
            'title' => "Test",
            'course' => $course,
        ]);
    }

    public function testHome()
    {
        $datatop = DB::table('courses')
            ->join('studentcourses', 'course_id', '=', 'courses.id')
            ->selectRaw('courses.*, SUM(user_id) as total')
            ->where('courses.is_active', 'yes')
            ->groupBy('courses.id', 'courses.name', 'courses.desc', 'courses.is_active', 'courses.created_at', 'courses.updated_at')
            ->orderByRaw('SUM(user_id) DESC')
            ->get();

        return view('testHome', [
            'title' => "Test Home",
            'datatop' => $datatop,
        ]);
    }

    public function testCourseList()
    {
        /* $data = course::all(); */
        $data = course::whereIn('is_active', ['yes'])->get();
        /* $data2 = course::whereIn('is_active', ['yes'])->get(); */

        $data2 = DB::table('courses')
            ->join('studentcourses', 'course_id', '=', 'courses.id')
            ->selectRaw('courses.*, SUM(user_id) as total')
            ->where('courses.is_active', 'yes')
            ->groupBy('courses.id', 'courses.name', 'courses.desc', 'courses.is_active', 'courses.created_at', 'courses.updated_at')
            ->orderByRaw('SUM(user_id) DESC')
            ->get();

        /* $datastudentcourse = studentcourse::all(); */

        return view('testCourseList', [
            'title' => "Test Course List",
            'data' => $data,
            'data2' => $data,
            'datatop' => $data2,
        ]);
    }

    public function testLogin()
    {
        return view('testLogin', [
            'title' => "Test Login",
        ]);
    }


    public function testAuthenticate(Request $request)
    {
        $credential = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        // dd($credential);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            return redirect()->intended('/testAdmin');
        }
        // dd('Invalid credentials');
        return back()->withErrors([
            'loginError' => 'Invalid credentials'
        ]);
    }

    public function testLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/testLogin');
    }

    public function testRegister()
    {
        return view('testRegister', [
            'title' => "Test Register",
        ]);
    }

    public function testStore(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:32',
            'username' => 'required|max:32',
            'email' => 'required|email',
            'password' => 'required',
            'is_active' => 'required',
        ]);

        /* $validateData['password'] = bcrypt($validateData['password']); */
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect('/testLogin')->with('success', 'Registration Success!');;
    }

    public function testAdmin()
    {
        return view('admin/testAdmin', [
            'title' => "Admin",
            'submenu' => "No"
        ]);
    }

    public function testAdminCourse()
    {
        $data = course::all();

        return view('admin/testAdminCourse', [
            'title' => "Course List",
            'data' => $data,
            'submenu' => "Yes"
        ]);
    }
}
