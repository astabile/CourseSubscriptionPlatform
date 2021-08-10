<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // Get last courses
        $courses = Course::latest()->paginate(8);

        return view('index.index', compact('courses'));
    }
}
