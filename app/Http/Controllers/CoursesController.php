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
        $courses = Course::all(); // alle cursussen uit de database halen
        return view('course.index', compact('courses')); // compact om variable in view te gebruiken
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
        $userCourse = new User_Course(); // nieuwe gebruikercursus

        $userCourse->course_id = $request->input('course_id');
        $userCourse->user_id = $request->input('user_id'); 
        $userCourse->start_date = $request->input('start_date');
        $userCourse->end_date = $request->input('end_date');


        $userCourse->save();  // hier save ik alle velden die zijn ingevoerd bij bij de view
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
        $course = new Course(); // nieuwe cursus

        $course->title = $request->input('title');
        $course->description = $request->input('description');
        $course->price = $request->input('price');
        $course->save(); // hier save ik alle velden die zijn ingevoerd bij de view

        return redirect('course'); 
    }

    public function edit($id)
    {
        $course = Course::find($id); // hier zoek ik naar 1 cursus

        return view('course.edit', compact('course'));
    }

    public function editUserCourse($id)
    {
        $userCourse = User_Course::find($id); // hier zoek ik naar 1 gebruiker cursus

        $users = User::all(); 

        return view('course.editUserCourse', compact('userCourse', 'users'));
    }

    
    public function updateUserCourse(Request $request, $id)
    {
        User_Course::find($id)->fill($request->input())->save(); //hier update hij alle velden 
        return redirect('course'); 
    }

    public function update(Request $request, $id)
    {
        Course::find($id)->fill($request->input())->save(); // update alle velden
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
        $courses = User_Course::where('users_courses.course_id', '=', $id)->sortable()->get(); // hier laat ik de id zien

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
        Course::find($id)->delete(); // hier zoek ik naar de id en delete ik de cursus
        return redirect()->back();
    }

    public function destroyUserCourse($id)
    {
        $course = User_Course::find($id);

        $course->delete(); // hier zoek ik naar de id delete ik de gebruiker cursus

        return redirect()->back();
    }
}
