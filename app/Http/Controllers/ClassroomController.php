<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::all();
        return view('classroom.index', compact('classrooms'));
    }

    public function create()
    {
        return view('classroom.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'level' => 'required|max:4'
        ]);

        Classroom::create($request->all());

        return redirect()->route('classroom.index');
    }

    public function edit($id)
    {
        $classroom = Classroom::findOrFail($id);
        return view('classroom.edit', compact('classroom'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:100',
            'level' => 'required|max:4'
        ]);

        $classroom = Classroom::findOrFail($id);
        $classroom->update($request->all());

        return redirect()->route('classroom.index');
    }

    public function destroy($id)
    {
        $classroom = Classroom::findOrFail($id);
        $classroom->delete();

        return redirect()->route('classroom.index');
    }
}
