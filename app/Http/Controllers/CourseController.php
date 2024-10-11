<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\View\View;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Course::all();
        return view('courses.index')->with('courses', $course);
    }

    public function create(): View    
    {
        return view('courses.create');
    }

    public function store(Request $request)  
    {
        $input = $request->all();
        Course::create($input);
        return redirect('courses')->with('flash_message', 'Course Addedd!');  
    }

    public function show($id)
    {
        $courses = Course::find($id);
        return view('courses.show')->with('courses', $courses);
    }

    public function edit($id)
    {
        $courses = Course::find($id);
        return view('courses.edit')->with('courses', $courses);
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $input = $request->all();
        $course->update($input);
        return redirect('courses')->with('flash_message', 'course Updated!');  
    }

    public function destroy($id)
    {
        Course::destroy($id);
        return redirect('courses')->with('flash_message', 'Course deleted!');  
    }
}
