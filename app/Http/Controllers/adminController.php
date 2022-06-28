<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\course;
use App\Models\module;
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
            'title' => "Course List",
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

    /* Course Module */
    public function module()
    {
        return view('admin/admin-module', [
            'title' => "Courses Modules",
            'submenu' => "Yes",
            'data' => module::all(),
        ]);
    }

    public function deleteModule(Request $request)
    {
        module::destroy($request->id);
        return redirect('/admin-module');
    }

    public function mengubahModule(Request $request)
    {
        return view('admin.edit.editmodule', [
            'title' => "Courses Modules",
            'submenu' => "Yes",
            'id' => $request->id,
            'data' => module::find($request->id)
        ]);
    }

    public function ubahdataModule(Request $request)
    {
        $flights = module::find($request->id);
        /* $flights->id = $request->id; */


        $validateData = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'author' => 'required',
            'file' => 'required',
        ]);

        if ($request->type == "Youtube") {
            $validateData['file'] = $this->getYoutubeEmbedUrl($request->file);
        } else {
            $validateData['file'] = $request->file;
        }

        $flights->name = $validateData['name'];
        $flights->type = $validateData['type'];
        $flights->author = $validateData['author'];
        $flights->file = $validateData['file'];

        $flights->save();

        return redirect('/admin-module');
    }

    public function createModule()
    {
        $course = course::all();
        return view('admin.create.createmodule', [
            'title' => "Courses Modules",
            'submenu' => "Yes",
            'course' => $course
        ]);
    }

    public function storeModule(Request $request)
    {

        /* $validateData['password'] = bcrypt($validateData['password']); */
        /* $validateData['password'] = Hash::make($validateData['password']); */
        $datamodule = module::whereIn('course_id', [$request->course_id])->where('step', 1)->get();

        if ($request->type == "Youtube") {

            $validateData = $request->validate([
                'course_id' => 'required',
                'step' => 'required|numeric|between:1,99',
                'name' => 'required',
                'type' => 'required',
                'author' => 'required',
                'file' => 'required',
            ]);

            if ($datamodule->count() == 0) {
                $validateData['step'] = 1;
            }

            $validateData['file'] = $this->getYoutubeEmbedUrl($request->file);

            module::create($validateData);

        } else /* if ($request->type == "PDF") */ {

            $validateData = $request->validate([
                'course_id' => 'required',
                'step' => 'required|numeric|between:1,99',
                'name' => 'required',
                'type' => 'required',
                'author' => 'required',
                'file' => 'required|mimes:pdf|max:10000',
            ]);

            if ($datamodule->count() == 0) {
                $validateData['step'] = 1;
            }

            $fileName = $request->file->getClientOriginalName();
            $request->file->move(public_path('uploads'), $fileName);
            $validateData['file'] =  $fileName;
            module::create($validateData);
        } /* else {
            $validateData['file'] = $request->file;
        } */

        return redirect('/admin-module')->with('success', 'Added Successfully!');;
    }

    function getYoutubeEmbedUrl($url)
    {
        $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
        $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(\w+)/i';

        if (preg_match($longUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }

        if (preg_match($shortUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }

        /* if (isset($youtube_id)) {
            return 'https://www.youtube.com/embed/' . $youtube_id;
        } else {
            return redirect()->back();
        } */

        return 'https://www.youtube.com/embed/' . $youtube_id;
    }

    /* public function storeFile(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:1000',
            'id' => 'required'
        ]);

        $fileName = $request->id . '. ' . $request->file->getClientOriginalName();
        $request->file->move(public_path('uploads'), $fileName);

        return back()
            ->with('success', 'You have successfuly upload file')
            ->with('file', $fileName);
    } */

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
