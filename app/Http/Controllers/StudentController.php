<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index',[
            'students' => Student::get(),
        ]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $student = new Student();

        $student->name = $request->name;
        $student->password = $request->password;

        $student->save();

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', [
            'student' => $student,
        ]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        $student->name = $request->name;
        $student->password = $request->password;

        $student->save();

        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $student = Student::find($id);

        $student->delete();

        return redirect()->route('users.index');
    }

}
