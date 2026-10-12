<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function Index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function Create()
    {
        return view('students.create');
    }

    public function Store(Request $request, Student $student)
    {
        $data = $request->validate([
            'fullname' => 'string|required',
            'date_of_birth' => 'date|nullable'
        ]);

        $student->create($data);
        return redirect()->back();
    }

    public function Destroy(Student $student)
    {
        $student->delete();
        return redirect()->back();
    }

    public function Show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function Edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function Update(Request $request, Student $student)
    {
        $data = $request->validate([
            'fullname' => 'string|required',
            'date_of_birth' => 'date|nullable'
        ]);

        $student->update($data);
        return redirect()->route('students.index');
    }
}
