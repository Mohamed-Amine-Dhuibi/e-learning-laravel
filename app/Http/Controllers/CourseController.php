<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\User;
use App\Models\Category;
use App\Models\Tutor;
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
          //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $tutors = User::where('privilege','tutor')->get() ; 
        return view('admin.courses.add_course')->with(['c_id'=>$id,'tutors'=>$tutors]) ;
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
            'title' => 'required|string',
            'course_brief'=>'required|string', 
            'course_fee'=>'required|numeric',
            'c_count'=>'required|integer',
            'cover_image'=>'image|nullable|max:1999',
        ]);
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
		
	   
		
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        if(Category::find($request->input('c_id') )){
            $course = new Course ; 
        $course->title =$request->input('title') ; 
        $course->course_brief = $request->input('course_brief') ; 
        $course->status = $request->input('status') ; 
        $course->course_fee=$request->input('course_fee') ;
        $course->category_id=$request->input('c_id') ;
        $course->nb_chapters = $request->input('c_count');
        $course->cover_image = $fileNameToStore ; 
        if($request->input('tutor')){
            if(Tutor::find($request->input('tutor'))){
                $tutor = Tutor::find($request->input('tutor'));
                $course->tutor_id=$request->input('tutor');
            }else return 'tutor not found';
        } 
        
        $course->save();
        return redirect('/myspace/courses'); 
        }return 'invalid request' ; 
        

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
        if($course){
            return view('admin.courses.course')->with('course',$course) ; 
        }else return 'invalid request' ; 
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
        $tutors = User::where('privilege','tutor')->get() ; 

        if($course){    
            if ($course->tutor_id !=null and Tutor::find($course->tutor_id) ){
                $tutor=Tutor::find($course->tutor_id);
            }else $tutor = 'not selected' ;
                return view('admin.courses.edit_course')->with(['course'=>$course,'tutors'=>$tutors,'tutor'=>$tutor]) ;
           
        }return 'invalid request' ; 
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
            'title' => 'required|string',
            'course_brief'=>'required|string', 
            'course_fee'=>'required|numeric',
            'c_count'=>'required|integer',
        ]);
        

        $course = Course::find($id) ;  
        
            
        if($course){
            /* handle file upload*/
            if($request->hasFile('cover_image')){
                // Get filename with the extension
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

                } else {
                    $fileNameToStore = $course->cover_image;
                }

            $course->title =$request->input('title') ; 
            $course->course_brief = $request->input('course_brief') ; 
            $course->status = $request->input('status') ; 
            $course->course_fee=$request->input('course_fee') ;
            $course->category_id=$course->category_id;
            if(Tutor::find($request->input('tutor'))){
                $tutor = Tutor::find($request->input('tutor'));
                $course->tutor_id=$request->input('tutor');
                }else return 'tutor not found';
            $course->cover_image = $fileNameToStore ; 
            $course->nb_chapters = $request->input('c_count');
    
            $course->save();
            return redirect('/myspace/courses');
        }else return 'invalid request' ; 
       
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
        if($course){
            $course->delete() ; 
            $enrolments = Enrolement::where('course_id',$id) ;
            $enrolments->delete() ;  
            return redirect('/myspace/courses');
        }else return 'invalid request' ; 
        
    }
}
