<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Teacher;
use Illuminate\View\View;

class TeacherController extends Controller
{
    //
    public function index(): View
    {
        $teachers = Teacher::all();
        return view('teachers.index')->with('teachers', $teachers);
    }

    public function create(): View    
    {
        return view('teachers.create');
    }

    public function store(Request $request): RedirectResponse    
    {
        $input = $request->all();
        Teacher::create($input);
        return redirect('teachers')->with('flash_message', 'teacher Addedd!');  
    }

    public function show($id): View
    {
        $teachers = Teacher::find($id);
        return view('teachers.show')->with('teachers', $teachers);
    }

    public function edit($id): View
    {
        $teacher = Teacher::find($id);
        return view('teachers.edit')->with('teachers', $teacher);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $teacher = Teacher::find($id);
        $input = $request->all();
        $teacher->update($input);
        return redirect('teachers')->with('flash_message', 'teacher Updated!');  
    }

    public function destroy($id): RedirectResponse
    {
        Teacher::destroy($id);
        return redirect('teachers')->with('flash_message', 'teacher deleted!');  
    }
}
