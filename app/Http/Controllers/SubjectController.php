<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\User;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    public function index()
    {
        $subjects = Subject::with('user')->get();
        return view('staff.subjects')->with('subjects',$subjects);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $sub = new Subject();
        $sub->subject_no    = $request->subject_no;
        $sub->subject_name  = $request->subject_name;
        $sub->staff_id      = $request->staff_id;
        $sub->course        = $request->course;
        $sub->save();
        return redirect(route('admin.subjects.index'))->with('message','Success...! Record has been inserted Successfully');
    }

    public function show(Subject $subject)
    {
        //
    }

    public function edit(Subject $subject)
    {
        //
    }


    public function update(Request $request, Subject $subject)
    {
        //
    }

    public function destroy(Subject $subject)
    {
        //
    }
    public function admin_view_all(Request $request)
    {
        $subjects = Subject::with('user')->get();
        // return $subjects;
        return view('Admin.Subject.index')->with('subjects',$subjects);
    }

    public function admin_insert(){
        $staffs = User::all();
        return view('Admin.Subject.admin_insert')->with('staffs',$staffs);
    }

    public function admin_delete(Request $request){
        $details = Subject::find($request->id)->delete();
        return redirect(route('admin.subjects.index'))->with('message','Success! Staff has been deleted Successfully');
    }

    public function admin_edit(Request $request){
        $subject = Subject::find($request->id);
        // return $subject;
        $staffs = User::all();
        return view('Admin.Subject.admin_edit',compact('subject','staffs'));
    }
    public function admin_update(Request $request){
        $sub =Subject::find($request->id);
        $sub->subject_no    = $request->subject_no;
        $sub->subject_name  = $request->subject_name;
        $sub->staff_id      = $request->staff_id;
        $sub->course        = $request->course;
        $sub->save();
        return redirect(route('admin.subjects.index'))->with('message','Success...! Record has been inserted Successfully');
    }
}
