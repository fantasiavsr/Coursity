<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\course;
use App\Models\User;

class adminController extends Controller
{
    public function index()
    {
        return view('admin/index', [
            'title' => "Admin",
            'submenu' => "No"
        ]);
    }

    /* public function login()
    {
        return view('admin/login', [
            'title' => "Admin Login",
            'submenu' => "No"
        ]);
    } */

    /* Courses */
    public function course()
    {
        return view('admin/admin-course', [
            'title' => "List Course",
            'submenu' => "Yes",
            'data' => course::all(),
        ]);
    }

    public function deleteCourse(Request $request)
    {
        course::destroy($request->id);
        return redirect('/admin-course');
    }

    public function mengubahCourse(Request $request)
    {
        return view('admin.course.editcourse', [
            'title' => "List Course",
            'submenu' => "Yes",
            'id' => $request->id,
            'data' => course::find($request->id)
        ]);
    }

    public function ubahdataCourse(Request $request)
    {
        /* $flights = course::find($request->id);
        $flights->username = $request->username;
        $flights->name = $request->name;
        $flights->email = $request->email;
        $flights->password = bcrypt($request->password);
        $flights->save(); */

        $flights = course::find($request->id);
        $flights->id = $request->id;
        $flights->name = $request->name;
        $flights->desc = $request->desc;
        $flights->is_active = $request->is_active;

        $flights->save();

        return redirect('/admin-course');
    }

    /* User */
    public function userlist()
    {
        $data = user::all();
        /* $data = user::whereIn('is_active', ['yes'])->get(); */
        return view('admin.admin-user', [
            'title' => "Edit User",
            'submenu' => "No",
            'data' => $data,
            'data2' => $data,
        ]);
    }

    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }
        // dd('Invalid credentials');
        return back()->with('Login Error');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }


}
