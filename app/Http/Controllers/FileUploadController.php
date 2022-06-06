<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file/fileUpload', [
            'title' => "FileUpload"
        ]);
    }

    public function fileUploadPost(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:10000',
            'id' => 'required'
        ]);

        /* $fileName = $request->id . time() . '.' . $request->file->extension(); */
        $fileName = $request->id . '. ' . $request->file->getClientOriginalName();
        $request->file->move(public_path('uploads'), $fileName);

        return back()
            ->with('success', 'You have successfuly upload file')
            ->with('file', $fileName);
    }
}
