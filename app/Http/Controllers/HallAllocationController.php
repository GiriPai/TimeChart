<?php

namespace App\Http\Controllers;

use App\Models\HallAllocation;
use Illuminate\Http\Request;
use App\User;
use Auth;

class HallAllocationController extends Controller
{

    public function index()
    {
        $allotments = HallAllocation::with('user')->get();
        // return $allotments;
        return view('Staff.halls.index')->with('allotments',$allotments);

    }

    public function admin_booking()
    {
        $allotments = HallAllocation::with('user')->get();
        // return $allotments;
        return view('Admin.halls.index')->with('allotments',$allotments);

    }

 
    public function create()
    {
        return view('Staff.halls.create');
    }


    public function store(Request $request)
    {
        if(count(HallAllocation::where('date','=',$request->date)
                            ->where('hall_name','=',$request->hall_name)
                            ->where('from','>=',$request->from)
                            ->where('to','>=',$request->to)->get())  >=1)
        {
            return redirect()->back()->with('msg', 'Sorry this hall Has already been booked');
        }
        else
        {
            $allot = new HallAllocation();
           
            $allot->hall_name = $request->input('hall_name');
            $allot->date = $request->input('date');
            $allot->from = $request->input('from');
            $allot->to = $request->input('to');
            $allot->event = $request->input('event');
            $allot->staff_id = Auth::guard()->user()->id;
            
            if($allot->save()){
                return redirect('/home')->with('success', 'Your booking has been registered');
            }
            else 
                return redirect()->back()->withErrors(['msg', 'Sorry something went wrong']);    
        }
    }

    public function show(HallAllocation $hallAllocation)
    {
        //
    }

    public function edit(HallAllocation $hallAllocation)
    {
        //
    }


    public function update(Request $request, HallAllocation $hallAllocation)
    {
        //
    }


    public function destroy(HallAllocation $hallAllocation)
    {
        //
    }
}
