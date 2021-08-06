<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserCoursesViewController extends Controller
{


    public function index()
    {
        
                return view('courses')->with('categories',Category::where('status',1)->orderby('created_at','desc')->get()) ;     
        
    }

    public function show($id){
        $course =  Course::find($id) ; 
        if($course){
            return view('user.course')->with('course',$course) ; 
        }else return('invalid request') ; 
        
    }
}
