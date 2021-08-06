<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // $students = Student::all();
        // return view('student.index', compact('students'));

        return Student::all();
    }

    public function create()
    {
        $student = new Student();
        return view('student.create', compact('student'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        Student::create([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);

        // return redirect()->route('student.index');
    }

    public function show(Student $student)
    {
        // return view('student.show', compact('student'));

        return $student;
    }

    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }


    public function update(Student $student)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',

        ]);

        return $student->update([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);

        // return redirect()->route('student.show', $student);
    }

    public function destroy(Student $student)
    {
        return $student->delete();

        // return redirect()->route('student.index');
    }
}
