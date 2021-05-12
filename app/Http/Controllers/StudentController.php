<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
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
            'image' => 'required|image',
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        Student::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'image' => $imagePath,
        ]);

        return redirect()->route('student.index');
    }

    public function show(Student $student)
    {
        return view('student.show', compact('student'));
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
            'image' => 'required',
        ]);

        $imagePath = request('image')->store('updateUploads', 'public');

        $student->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'image' => $imagePath,
        ]);

        return redirect()->route('student.show', $student);
    }
}
