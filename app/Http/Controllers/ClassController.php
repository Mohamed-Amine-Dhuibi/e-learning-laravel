<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Tutor;


class ClassController extends Controller
{
   public function index($id){
    
    $course = Course::find($id) ;
    if($course){
        $tutor = Tutor::find($course->tutor_id);
        return view('user.class')->with(['course'=>$course , 'tutor'=>$tutor]) ; 
    }else return 'invalid request';

   }
}
