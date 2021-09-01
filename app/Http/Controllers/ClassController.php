<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Tutor;
use App\Models\Enrolement;




class ClassController extends Controller
{
   public function index($id){
    
    $course = Course::find($id) ;
    if($course){
        $enrolment = Enrolement::where('user_id',Auth()->user()->id)
        ->where('course_id',$id)
        ->where('subscription_is_paid','1')
        ->get() ;
        if($enrolment!='[]'){
            $tutor = Tutor::find($course->tutor_id);
            return view('user.class')->with(['course'=>$course , 'tutor'=>$tutor]) ; 
        }else return 'not subscribed' ;
        
    }else return 'invalid request';

   }
}
