<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teacherController extends Controller
{
    public function teach()
    {
        return view('teacher');
    }
    public function course()
    {
        return view('courses');
    }
}
