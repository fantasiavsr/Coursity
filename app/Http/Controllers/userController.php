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
