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
        return view('student.create');
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
}
