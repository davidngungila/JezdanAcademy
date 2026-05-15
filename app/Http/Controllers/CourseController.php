<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $courses = Course::with(['category', 'instructor'])->where('status', 'published')->get();
        $categories = Category::all();

        return view('pages.courses.index', compact('courses', 'categories'));
    }

    public function show($slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        return view('pages.courses.show', compact('course'));
    }
}
