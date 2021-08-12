<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Course;
use App\Models\Event;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserCoursesViewController extends Controller
{


    public function index()
    {
       $categories =  Category::where('status','1')->orderby('created_at','desc')->get() ; 
       $events = Event::where('status','1')->get() ; 
        return view('courses')->with(['categories'=>$categories,'events'=>$events]) ;     
        
    }

    public function show($id){
        $course =  Course::find($id) ; 
        if($course){
            return view('user.course')->with('course',$course) ; 
        }else return('invalid request') ; 
        
    }
  
}
