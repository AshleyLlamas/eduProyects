<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.students.index')->only('index');
        $this->middleware('can:admin.students.show')->only('show');
        $this->middleware('can:admin.students.destroy')->only('destroy');
        $this->middleware('can:admin.students.create')->only('create', 'store');
        $this->middleware('can:admin.students.edit')->only('edit');
    }

    public function index(){
        return view('admin.students.index');
    }

    public function create()
    {
        return view('admin.students.create');
    }

    public function show(Student $student)
    {
        return view('admin.students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('admin.students.edit', compact('student'));
    }

    public function destroy(Student $student)
    {   
        // if($student->foto){
        //     Storage::delete($student->foto);
        // }

        $student->delete();

        return redirect()->route('admin.students.index');
    }
}
