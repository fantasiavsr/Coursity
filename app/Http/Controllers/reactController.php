<?php

namespace App\Http\Controllers;
use App\Models\course;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        ->selectRaw('courses.* , SUM(user_id) as total')
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
             ->selectRaw('courses.* , SUM(user_id) as total')
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

            return redirect()->intended('/admin');
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
}
