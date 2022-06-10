<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileViewerController extends Controller
{
    public function index()
    {
        return view('file/fileViewer', [
            'title' => "FileViewer"
        ]);
    }

    public function indexvideo()
    {
        return view('file/videoViewer', [
            'title' => "VideoViewer"
        ]);
    }
}
