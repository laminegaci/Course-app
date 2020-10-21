<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::with('user')->withCount('episodes')->get();
        //dd($courses);
        return Inertia::render('Courses/Index', ['courses' => $courses]);
    }

    public function show($id) {
        $course = Course::where('id', $id)->with('user')->with('episodes')->first();
        //dd($course);
        return Inertia::render('Courses/Show', ['course' => $course]);
    }
}
