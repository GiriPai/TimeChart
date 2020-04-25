<?php

namespace App\Http\Controllers;

use App\Models\DateAndDay;
use Illuminate\Http\Request;
use App\Models\SessionLog;
use App\Models\DayAndSession;

class DateAndDayController extends Controller
{

    public function index()
    {
        $dd = DateAndDay::all();
        return view('Admin.dd.index',compact('dd'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        // return $request;
        $rec = new DateAndDay();
        $rec->date = $request->date;
        $rec->day_order = $request->day_order;
        if($rec->save()){
            $ds = DayAndSession::where('day_order','=',$request->day_order)->get();
            foreach($ds as $d){
                $sl = new SessionLog();
                $sl->date =$request->date;
                $sl->day_order = $d->day_order;
                $sl->class = $d->class_name;
                $sl->session_1 = $d->s1;
                $sl->staff_1 = $d->ss1;

                $sl->session_2 = $d->s2;
                $sl->staff_2 = $d->ss2;

                $sl->session_3 = $d->s3;
                $sl->staff_3 = $d->ss3;

                $sl->session_4 = $d->s4;
                $sl->staff_4 = $d->ss4;

                $sl->session_5 = $d->s5;
                $sl->staff_5 = $d->ss5;

                $sl->save();
            }
        }


        return redirect(route('admin.dd.index'));
    }


    public function show(DateAndDay $dateAndDay)
    {
        //
    }

    public function edit(DateAndDay $dateAndDay)
    {
        //
    }

    public function update(Request $request, DateAndDay $dateAndDay)
    {
        //
    }

    public function destroy(DateAndDay $dateAndDay,Request $request)
    {
        $rec = DateAndDay::find($request->id)->delete();
        return redirect(route('admin.dd.index'));
    }
}
