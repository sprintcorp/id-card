<?php

namespace App\Http\Controllers;

use App\Student;
use App\Service\Fileupload;
use Illuminate\Http\Request;
use App\Imports\ImportStudent;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\QueryException;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addStudent');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $message = '';
        return view('student',compact('message'));
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
        Excel::import(new ImportStudent,$request->file('file'));
        }catch(QueryException  $queryException){
            
            $message = $queryException->getMessage();
            return view('student',compact('message'));
            
        }
        Alert::success('Success', 'Action Successful');
        return back();
    }

    public function save(Request $request){
        $student = new Student();
        $student->firstname = $request['firstname'];
        $student->secondname = $request['secondname'];
        $student->admission_no = $request['admission_no'];
        $student->class = $request['class'];
        $student->surname = $request['surname'];
        $student->address = $request['address'];
        $student->phone_no = $request['phone_no'];
        $upload = new Fileupload();
        if ($request->has('signature')){
            $response = $upload->upload($request->file('signature'),'signature');
            if(!empty($student->signature)) {
                unlink($student->signature);
            }
            $student->signature = $response;
        }
        if ($request->has('image')) {
            $response = $upload->upload($request->file('image'),'passport');
            if(!empty($student->image)) {
                unlink($student->image);
            }
            $student->image = $response;
        }
        try {
            $student->save();
            Alert::success('Success', 'Action Successful');
            return back();
        }catch(QueryException $queryException){
            return $queryException->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {        
        return view('editStudent',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->firstname = $request['firstname'];
        $student->secondname = $request['secondname'];
        $student->admission_no = $request['admission_no'];
        $student->class = $request['class'];
        $student->surname = $request['surname'];
        $student->phone_no = $request['phone_no'];
        $student->address = $request['address'];
        $upload = new Fileupload();
        if ($request->has('signature')){
            $response = $upload->upload($request->file('signature'),'signature');
            if(!empty($student->signature)) {
                unlink($student->signature);
            }
            $student->signature = $response;
        }
        if ($request->has('image')) {
            $response = $upload->upload($request->file('image'),'passport');
            if(!empty($student->image)) {
                unlink($student->image);
            }
            $student->image = $response;
        }
        try {
            $student->save();
            Alert::success('Success', 'Action Successful');
            return back();
        }catch(QueryException $queryException){
            return $queryException->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
            $student->delete();
            if (!empty($student->image)) {
                unlink($student->image);
            }
            if (!empty($student->signature)) {
                unlink($student->signature);
            }
            Alert::success('Success', 'Action Successful');
            return back();
    }
}