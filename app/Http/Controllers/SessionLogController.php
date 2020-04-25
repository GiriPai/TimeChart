<?php

namespace App\Http\Controllers;

use App\Models\SessionLog;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\User;
class SessionLogController extends Controller
{

    public function index()
    {   
        
            $sess1 = SessionLog::with('session1')->where('staff_1','=',Auth::guard()->user()->id)->where('date','=',Carbon::today()->toDateString())->first();
            $sess2 = SessionLog::with('session2')->where('staff_2','=',Auth::guard()->user()->id)->where('date','=',Carbon::today()->toDateString())->first();
            $sess3 = SessionLog::with('session3')->where('staff_3','=',Auth::guard()->user()->id)->where('date','=',Carbon::today()->toDateString())->first();
            $sess4 = SessionLog::with('session4')->where('staff_4','=',Auth::guard()->user()->id)->where('date','=',Carbon::today()->toDateString())->first();
            $sess5 = SessionLog::with('session5')->where('staff_5','=',Auth::guard()->user()->id)->where('date','=',Carbon::today()->toDateString())->first();
           // return $sess1->session1;
            return view('Staff.schedules',compact('sess1','sess2','sess3','sess4','sess5'));
    
    }

    public function search(Request $request)
    {
        if(isset($request->date)){

            $sess1 = SessionLog::with('session1')->where('staff_1','=',Auth::guard()->user()->id)->where('date','=',$request->date)->first();
            $sess2 = SessionLog::with('session2')->where('staff_2','=',Auth::guard()->user()->id)->where('date','=',$request->date)->first();
            $sess3 = SessionLog::with('session3')->where('staff_3','=',Auth::guard()->user()->id)->where('date','=',$request->date)->first();
            $sess4 = SessionLog::with('session4')->where('staff_4','=',Auth::guard()->user()->id)->where('date','=',$request->date)->first();
            $sess5 = SessionLog::with('session5')->where('staff_5','=',Auth::guard()->user()->id)->where('date','=',$request->date)->first();

            // return $sess2->session2->subject_name;
           
            return view('Staff.schedules',compact('sess1','sess2','sess3','sess4','sess5'));

        }
    }


    public function store(Request $request)
    {
        //
    }


    public function show(SessionLog $sessionLog)
    {
        //
    }

    public function edit(SessionLog $sessionLog)
    {
        //
    }

    public function update(Request $request, SessionLog $sessionLog)
    {
        //
    }

    public function destroy(SessionLog $sessionLog,Request $request)
    {
        // return $request->id;
        $s = SessionLog::find($request->id)->delete();
        return redirect()->route('admin.sl.view_all');
    }

    public function admin_view_all(){

          $timechart = SessionLog::with(['session1:id,subject_name','session2:id,subject_name','session3:id,subject_name','session4:id,subject_name','session5:id,subject_name','ss1','ss2','ss3','ss4','ss5'])->get();
           // return $timechart;
            return view("Admin.sl.index",compact('timechart'));
        
    }

    public function admin_edit(Request $request){
        // return $request->id;
        $staffs = User::all();
        $record = SessionLog::where('id',$request->id)->with(['session1:id,subject_name','session2:id,subject_name','session3:id,subject_name','session4:id,subject_name','session5:id,subject_name','ss1','ss2','ss3','ss4','ss5'])->first();
       // return $record;
       return view('Admin.sl.edit',compact('record','staffs'));
    }
    public function admin_update(Request $request){
        // return $request;

        $rec = SessionLog::find($request->id);
        $rec->session_1 = $request->s1;
        $rec->session_2 = $request->s2;
        $rec->session_3 = $request->s3;
        $rec->session_4 = $request->s4;
        $rec->session_5 = $request->s5;

        $rec->staff_1 = $request->ss1;
        $rec->staff_2 = $request->ss2;
        $rec->staff_3 = $request->ss3;
        $rec->staff_4 = $request->ss4;
        $rec->staff_5 = $request->ss5;

        $rec->save();

        return redirect()->route('admin.sl.view_all');

    }

}
