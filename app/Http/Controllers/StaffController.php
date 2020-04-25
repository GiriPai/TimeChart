<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = User::all();
        
        return view('Staff.staff.index')->with('staffs',$staffs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $details = User::find($id);
       
        return view('staff.Staff.show')->with('details',$details) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function admin_view_all(){
        $staffs = User::all();
        // return $staffs;
        return view('Admin.staff.index')->with('staffs',$staffs);
    }

    public function admin_insert(){
        return view('Admin.Staff.admin_insert');
    }

    public function admin_store(Request $request){
        $user                       = new User;
        $user->staff_roll           = $request->input('staff_roll');
        $user->address              = $request->input('address');
        
        $user->designation          = $request->input('designation');
        $user->email                = $request->input('email');
        $user->name                = $request->input('name');
        
        $user->password             = Hash::make($request->input('password'));
        $user->phone                = $request->input('phone');
        
       
        $prof_public_url            = $request->file('file')->store('public/staffs');

        $user->profpic_name         = substr($prof_public_url, 14);
        $user->profpic_url          = str_replace("public","storage",$prof_public_url);

        $user->save();
        return redirect(route('admin.staff.index'))->with('message','Success...! Record has been inserted Successfully');
    }

    public function admin_show(Request $request){
        $details = User::find($request->id);
        // return $details;
        return view('Admin.Staff.show')->with('details',$details) ;
    }

    public function admin_delete(Request $request){
        $details = User::find($request->id)->delete();

        return redirect(route('admin.staff.index'))->with('message','Success! Staff has been deleted Successfully');
    }
}
