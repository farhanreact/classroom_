<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('classroom')->get();
        return view('student.index', compact('students'));
    }

    public function create()
    {
        $classrooms = Classroom::all();
        return view('student.create', compact('classrooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'classrooms_id' => 'required',
            'gender' => 'required|in:L,P'
        ]);

        Student::create($request->all());

        return redirect()->route('student.index');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $classrooms = Classroom::all();

        return view('student.edit', compact('student', 'classrooms'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:100',
            'classrooms_id' => 'required',
            'gender' => 'required|in:L,P'
        ]);

        $student = Student::findOrFail($id);
        $student->update($request->all());

        return redirect()->route('student.index');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('student.index');
    }
}
