<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
        return view('admin.edit.editcourse', [
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

    public function createCourse()
    {
        return view('admin.create.createcourse', [
            'title' => "Edit User",
            'submenu' => "Yes",
        ]);
    }

    public function storeCourse(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'is_active' => 'required',
        ]);

        // $validateData['password'] = bcrypt($validateData['password']);
        /* $validateData['password'] = Hash::make($validateData['password']); */

        Course::create($validateData);

        return redirect('/admin-course')->with('success', 'Registration Success!');;
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

    public function deleteUser(Request $request)
    {
        user::destroy($request->id);
        return redirect('/admin-user');
    }

    public function mengubahUser(Request $request)
    {
        return view('admin.edit.edituser', [
            'title' => "Edit Course",
            'submenu' => "No",
            'id' => $request->id,
            'data' => user::find($request->id)
        ]);
    }

    public function ubahdataUser(Request $request)
    {
        $flights = user::find($request->id);
        $flights->username = $request->username;
        $flights->name = $request->name;
        $flights->email = $request->email;
        /* $flights->password = bcrypt($request->password); */
        /* $flights->password = Hash::make($request->password); */
        $flights->role = $request->role;
        $flights->is_active = $request->is_active;

        $flights->save();

        return redirect('/admin-user');
    }

    public function createUser()
    {
        return view('admin.create.createuser', [
            'title' => "Edit User",
            'submenu' => "No",
        ]);
    }

    public function storeUser(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
            'is_active' => 'required',
        ]);

        // $validateData['password'] = bcrypt($validateData['password']);
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect('/admin-user')->with('success', 'Registration Success!');;
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
