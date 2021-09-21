<?php

namespace App\Http\Controllers;

use App\Student;


use Illuminate\Http\Request;


class studentsController extends Controller
{
    public function index()
    {
        return view ('class.index')->with('students', Student::all());
    }

    public function show($id)
    {
        return view('class.show')->with('student', Student::find($id));
    }

    public function create()
    {
        return view ('class.create');
    }

    public function add()
    {

        $this ->validate(request(),[
            'name'=>'required',
            'details'=>'required',
        ]);
        $pupil = new Student;
        $data = request()->all();

        $pupil->name = $data['name'];
        $pupil->details =$data['details'];
        $pupil->completed=false;

        $pupil->save();

        session()->flash('success','Successfully created.');

        return redirect('/students');


    }

    public function edit($id)
    {
     $student =Student::find($id);

     return view ('class.edit')->with('student',$student);
    }

    public function update($studentId)
    {
        $this ->validate(request(),[
            'name'=>'required',
            'details'=>'required',
        ]);

        $data = request()->all();
        $student = Student::find($studentId);

        $student->name =$data['name'];
        $student->details = $data['details'];

        $student->save();
        session()->flash('success','Updated!');

        return redirect('/students');


    }

    public function delete($studentId)
    {
      $student = Student::find($studentId);

      $student->delete();

      session()->flash('success','Deleted!');

      return redirect('/students');
    }
}
