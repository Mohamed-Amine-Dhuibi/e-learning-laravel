<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Course;

use Illuminate\Http\Request;

class UserCoursesViewController extends Controller
{
    public function index($id){
        $course =  Course::find($id) ; 
        return view('user.course')->with('course',$course) ; 
    }
}
