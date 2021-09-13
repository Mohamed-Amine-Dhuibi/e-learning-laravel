<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Tutor;
use App\Models\Chapter;
use App\Models\Enrolement;
use Illuminate\Support\Facades\Auth ; 




class ClassController extends Controller
{
   public function index($id){ 
    $course = Course::find($id) ;
    if($course){
        $enrolment = Enrolement::where('user_id',Auth()->user()->id)
        ->where('course_id',$id)
        ->where('subscription_is_paid','1')
        ->get() ;
        if($enrolment!='[]' or $course->tutor_id==Auth::user()->id){
            $tutor = Tutor::find($course->tutor_id);
            $chapters = $course->Chapters ;
            if($chapters!='[]' or $course->tutor_id==Auth::user()->id){
                if($chapters!='[]'){
                    $chapter = $chapters[0] ;
                }else $chapter = null; 
                return view('user.class')->with(['chapter'=>$chapter,'course'=>$course , 'tutor'=>$tutor ]) ;   
            }return 'not initialised';
    }return 'not subscribed';

    }else return 'invalid request';
    }
    

   public function get_chapter($id){
    $chapter = Chapter::find($id);
    if($chapter){
        return $chapter;
    }return 'not found';
   }

   public function delete_course(Request $request){
    $course = Course::find($request->input('course_id')) ;
    if($course){
        foreach ($course->Chapters  as $chapter){
            if ($chapter->id == $request->input('chapter')){
                $video_link = "./storage/".$course->title."/".$chapter->video ;
                unlink($video_link) ; 
                $chapter->delete() ;
                return  redirect()->back(); 
            } 
        }return 'chapter not found !';
    } else 'course not found';
   }


}
