<?php

namespace App\Http\Controllers;
use App\Models\Course ;
use App\Models\Enrolement ;

use Illuminate\Http\Request;

class CoursesSubscriptionsViewController extends Controller
{
    public function index(){

        $cat =new  CategoryController ;
        $Cats = $cat->index() ; 
            
        return view('admin.enrolments.enrolments')->with($Cats);
    }

    public function course_enrolment($id){

        $course = Course::find($id) ; 
        $enrolments = $course->Enrolments ; 
        return view('admin.enrolments.enrolment')->with(['enrolments'=>$enrolments,'course'=>$course]) ; 
    }


    public function approve($id){
        $enrolment = Enrolement::find($id) ; 
        $enrolment->subscription_is_paid = 1 ;
        $enrolment->save() ;
        return redirect()->back() ; 
    }
    public function cancel($id){
        $enrolment = Enrolement::find($id) ; 
        $enrolment->subscription_is_paid = 0  ;
        $enrolment->save() ;
        return redirect()->back() ; 
    }


}
