<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class StudentController extends Controller
{
    public function getAllStudents()
    {
        $teachers = Student::paginate(30);
        return response($Students);
    }

    public function addNewStudent(Request $request)
    {
        
        $Student = new Student();
        $Student->first_name=$request['first_name'];
        $Student->last_name=$request['last_name'];
        $Student->email=$request['email'];
        $Student->phone=$request['phone'];
        $Student->save();

        return response()->json([
            'status_code'=>201,
            'message'=>'Teacher created successfuly',
            'data' => $Student
            ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
}

