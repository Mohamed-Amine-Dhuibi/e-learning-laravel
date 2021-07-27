<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('admin.add_course')->with('c_id',$id) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'course_brief'=>'required', 
            'course_fee'=>'required',
            'c_count'=>'required',
            
        ]);
        $course = new Course ; 
        $course->title =$request->input('title') ; 
        $course->course_brief = $request->input('course_brief') ; 
        $course->status = $request->input('status') ; 
        $course->course_fee=$request->input('course_fee') ;
        $course->category_id=$request->input('c_id') ;
        $course->nb_chapters = $request->input('c_count');

        $course->save();
        return redirect('/myspace/courses'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id) ; 
        return view('admin.course')->with('course',$course) ; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id) ; 
        return view('admin.edit_course')->with('course',$course) ;
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


        $validated = $request->validate([
            'title' => 'required',
            'course_brief'=>'required', 
            'course_fee'=>'required',
            'c_count'=>'required',
            
        ]);
        $course = Course::find($id) ;  
        $course->title =$request->input('title') ; 
        $course->course_brief = $request->input('course_brief') ; 
        $course->status = $request->input('status') ; 
        $course->course_fee=$request->input('course_fee') ;
        $course->category_id=$request->input('c_id') ;
        $course->nb_chapters = $request->input('c_count');

        $course->save();
        return redirect('/myspace/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id) ; 
        $course->delete() ; 
        return redirect()->back();
    }
}
