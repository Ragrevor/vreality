<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;


class CourseController extends Controller
{

    public function courses()
    {
        $courses = Course::all();
        return view('courses', compact('courses'));
    }

    public function course()
    {
        return view('course');
    }

}

