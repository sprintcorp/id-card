<?php

namespace App\Http\Controllers;

use App\Staff;
use App\Service\Fileupload;
use App\Imports\ImportStaff;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\QueryException;
use RealRashid\SweetAlert\Facades\Alert;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('allStaff',compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff');
    }

    public function staff(){
        return view('addStaff');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            Excel::import(new ImportStaff,$request->file('file'));
            }catch(QueryException  $queryException){
                return $queryException;
            }
            Alert::success('Success', 'Action Successful');
            return back();
    }

    public function save(Request $request){
        $staff = new Staff();
        $staff->name = $request['name'];
        $staff->staff_id = $request['staff_id'];
        $staff->class = $request['class'];
        $staff->address = $request['address'];
        $staff->phone = $request['phone'];
        $staff->department = $request['department'];
        $staff->designation = $request['designation'];
        $upload = new Fileupload();
        if ($request->has('signature')){
            $response = $upload->upload($request->file('signature'),'signature');
            if(!empty($staff->signature)) {
                unlink($staff->signature);
            }
            $staff->signature = $response;
        }
        if ($request->has('image')) {
            $response = $upload->upload($request->file('image'),'passport');
            if(!empty($staff->image)) {
                unlink($staff->image);
            }
            $staff->image = $response;
        }
        $staff->save();
        Alert::success('Success', 'Action Successful');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return view('editStaff',compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        $staff->firstname = $request['firstname'];
        $staff->lastname = $request['lastname'];
        $staff->staff_id = $request['staff_id'];
        $staff->class = $request['class'];
        $staff->address = $request['address'];
        $staff->phone = $request['phone'];
        $staff->department = $request['department'];
        $staff->designation = $request['designation'];
        $upload = new Fileupload();
        if ($request->has('signature')){
            $response = $upload->upload($request->file('signature'),'signature');
            if(!empty($staff->signature)) {
                unlink($staff->signature);
            }
            $staff->signature = $response;
        }
        if ($request->has('image')) {
            $response = $upload->upload($request->file('image'),'passport');
            if(!empty($staff->image)) {
                unlink($staff->image);
            }
            $staff->image = $response;
        }
        $staff->save();
        Alert::success('Success', 'Action Successful');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();
        if (!empty($staff->image)) {
            unlink($staff->image);
        }
        if (!empty($staff->signature)) {
            unlink($staff->signature);
        }
        Alert::success('Success', 'Action Successful');
        return back();
    }
}