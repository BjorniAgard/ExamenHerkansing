<?php

namespace App\Http\Controllers;

use App\Course;
use App\User;
use App\User_Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();

        return view('course.create', compact('courses'));
    }

    public function createUserCourse()
    {
        $users = User::all();

        return view('course.createUserCourse', compact('users')); 
    }

    public function storeUserCourse(Request $request)
    {
        $userCourse = new User_Course();

        $userCourse->course_id = $request->input('course_id'); 
        $userCourse->user_id = $request->input('user_id'); 
        $userCourse->price = $request->input('price'); 

        $userCourse->save(); 
        return redirect('course');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course();

        $course->title = $request->input('title');
        $course->description = $request->input('description');
        $course->save();

        return redirect('course'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courses = User_Course::where('users_courses.course_id', '=', $id)->get();

        return view('course.show', compact('courses'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::find($id)->delete();
        return redirect()->back();
    }

    public function destroyUserCourse($id)
    {
        $course = User_Course::find($id);

        $course->delete();

        return redirect()->back();
    }
}
