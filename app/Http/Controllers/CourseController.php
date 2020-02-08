<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use illuminate\support\facades\validator;

class CourseController extends Controller
{
    public function getAllCourses()
    {
        $courses = Course::paginate(30);
        return response($courses);
    }

    public function addNewCourse(Request $request)
    {
        
        $course = new Course();
        $course->name=$request['name'];
        $course->short_description=$request['short_description'];
        $course->description=$request['description'];
        $course->price=$request['price'];
        $course->course_time=$request['course_time'];
        $course->start_at=$request['start_at'];
        $course->end_at=$request['end_at'];
        $course->schedule=$request['schedule'];
        $course->link=$request['link'];
        $course->teacher_id=$request['teacher_id'];
        $course->level_id=$request['level_id'];
        $course->save();

        return response()->json([
            'status_code'=>201,
            'message'=>'Course created successfuly',
            'data' => $course
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
