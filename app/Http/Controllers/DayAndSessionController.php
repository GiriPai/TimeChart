<?php

namespace App\Http\Controllers;

use App\Models\DayAndSession;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\user;
class DayAndSessionController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $ds = new DayAndSession();
        $ds->day_order = $request->day_order;
        $ds->class_name = $request->class_name;
        $ds->s1 = $s1 =  $request->s1;
        $ds->s2 = $s2 =  $request->s2;
        $ds->s3 = $s3 =  $request->s3;
        $ds->s4 = $s4 =  $request->s4;
        $ds->s5 = $s5 =  $request->s5;
  
        $ds->ss1 = Subject::where('id','=',$s1)->pluck('staff_id')->first();
        $ds->ss2 = Subject::where('id','=',$s2)->pluck('staff_id')->first();
        $ds->ss3 = Subject::where('id','=',$s3)->pluck('staff_id')->first();
        $ds->ss4 = Subject::where('id','=',$s4)->pluck('staff_id')->first();
        $ds->ss5 = Subject::where('id','=',$s5)->pluck('staff_id')->first();
        
        $ds->save();
        return redirect(route('admin.ds.index'))->with('message','Record inserted Successfully');
    }


    public function show(DayAndSession $dayAndSession)
    {
        //
    }


    public function edit(DayAndSession $dayAndSession)
    {
        //
    }


    public function update(Request $request, DayAndSession $dayAndSession)
    {
        //
    }

    public function destroy(DayAndSession $dayAndSession)
    {
        //
    }

    public function admin_view_all(){
        $timechart = DayAndSession::with(['session1:id,subject_name','session2:id,subject_name','session3:id,subject_name','session4:id,subject_name','session5:id,subject_name','ss1','ss2','ss3','ss4','ss5'])->get();
        // return $timechart;
       
        // dd($timechart);
        
        return view('Admin.ds.index',compact('timechart'));
    }

    public function admin_insert(){
        return view('Admin.ds.insert');
    }


    public function getSubjects(Request $request){
        $courses = Subject::where('course',$request->class_name)->pluck('subject_name','id');
        return json_encode($courses);
    }

    public function admin_edit(Request $request){
       $record = DayAndSession::find($request->id)->with(['session1:id,subject_name','session2:id,subject_name','session3:id,subject_name','session4:id,subject_name','session5:id,subject_name','ss1','ss2','ss3','ss4','ss5'])->first();
       // return $record;
       return view('Admin.ds.edit')->with('record',$record);
    }

    public function admin_update(Request $request){
        $ds = DayAndSession::find($request->id);
        $ds->day_order = $request->day_order;
        $ds->class_name = $request->class_name;
        $ds->s1 = $s1 =  $request->s1;
        $ds->s2 = $s2 =  $request->s2;
        $ds->s3 = $s3 =  $request->s3;
        $ds->s4 = $s4 =  $request->s4;
        $ds->s5 = $s5 =  $request->s5;
  
        $ds->ss1 = Subject::where('id','=',$s1)->pluck('staff_id')->first();
        $ds->ss2 = Subject::where('id','=',$s2)->pluck('staff_id')->first();
        $ds->ss3 = Subject::where('id','=',$s3)->pluck('staff_id')->first();
        $ds->ss4 = Subject::where('id','=',$s4)->pluck('staff_id')->first();
        $ds->ss5 = Subject::where('id','=',$s5)->pluck('staff_id')->first();
        
        $ds->save();
        return redirect(route('admin.ds.index'))->with('message','Record inserted Successfully');
    }
}
