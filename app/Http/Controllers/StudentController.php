<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index(Request $request)
    {
        $students = Student::where('course','=',$request->class_name)->get();
        // return $students;
        return view('Staff.student.index')->with('students',$students);
    }

    public function create(Request $request)
    {
        $class =  $request->class_name;
        return view('Staff.student.insert')->with('class',$class);
    }

    public function store(Request $request)
    {
        // return $request;
        $user                       = new Student;
        $user->roll_no              = $request->input('roll_no');
        $user->name                 = $request->input('name');
        
        $user->course               = $request->input('course');
        $user->gender               = $request->input('gender');
        $user->address              = $request->input('address');

        $user->email                = $request->input('email');
        
        $user->phone_number         = $request->input('phone');
        $prof_public_url            = $request->file('file')->store('public/students');

        $user->profpic_name         = substr($prof_public_url, 14);
        $user->profpic_url          = str_replace("public","storage",$prof_public_url);
        $user->isBlocked = 1;

        $user->save();
        return redirect(route('staff.students',$request->input('course')))->with('message','Success...! Record has been inserted Successfully');
    }

    public function show(Request $request)
    {
        $details = Student::find($request->id);
        // return $details;
        return view('Admin.student.show')->with('details',$details) ;
    }


    public function edit(Request $request)
    {
        $student = Student::find($request->id);
        // return $student;
        return view('Staff.student.edit')->with('student',$student);
    }

    public function update(Request $request, Student $student)
    {
        
        $user                       = Student::find($request->id);
        $user->roll_no              = $request->input('roll_no');
        $user->name                 = $request->input('name');
        
        $user->course               = $request->input('course');
        $user->gender               = $request->input('gender');
        $user->address              = $request->input('address');

        $user->email                = $request->input('email');
        
        $user->phone_number         = $request->input('phone');
        $prof_public_url            = $request->file('file')->store('public/students');

        $user->profpic_name         = substr($prof_public_url, 14);
        $user->profpic_url          = str_replace("public","storage",$prof_public_url);
        $user->isBlocked = 1;

        $user->save();
        return redirect(route('staff.students',$request->input('course')))->with('message','Success...! Record has been inserted Successfully');
    }


    public function destroy(Student $student)
    {
        //
    }
    public function admin_view_all(Request $request){

        $students = Student::where('course','=',$request->id)->get();
        // return $students;
        return view('Admin.Student.index')->with('students',$students);
    }

    public function admin_insert(){
        return view('Admin.Student.admin_insert');
    }

    public function admin_show(Request $request){
        $details = Student::find($request->id);
        // return $details;
        return view('Admin.student.show')->with('details',$details) ;
    }
}
