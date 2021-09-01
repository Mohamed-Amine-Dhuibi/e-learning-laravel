<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth ; 
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

class ApiDataController extends Controller
{
    public function user(){
        return response(auth()->user(),200);
    }
    
    public function courses(Request $request){
        if($request->category){
            $validated = $request->validate(['category'=>'integer']);
            $cat= Category::find($request->category);
        if($cat){
            return  $cat->Courses;
        }else return 'undefined category';
           
        }return response(Course::all(),200);
         

    }

    public function categories(){
        return Category::all() ;  
    }

    public function events(){
        return response(Event::all(),200) ; 
    }

    public function UserCourses(){
       
            $enrolments = Auth::user()->Enrolments ;
            $courses = [];
            foreach ($enrolments as $enrol){
                if($enrol->Course){
                 array_push($courses,$enrol->Course) ; 
                }
            } 
            $events = [];
            foreach ($enrolments as $enrol){
                if($enrol->Event){
                 array_push($events,$enrol->Event) ; 
                }
            }  
             return response(array('courses'=>$courses, 'events'=>$events),200);
             
         }
    

    public function course_chapters(Request $request){
        $validated = $request->validate(['course'=>'numeric']) ; 
        $course = Course::find($request->input('course'));
        if($course){
            return response($course->Chapters ,200);
        } return 'invalid request';
    }
    
}
