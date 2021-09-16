<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth ; 
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Event ; 
use App\Models\Enrolement; 
use Illuminate\Support\Facades\DB;


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
             return response(array('courses'=>$courses),200);
             
         }
         public function UserEvents(){
       
            $enrolments = Auth::user()->Enrolments ;
            $events = [];
            foreach ($enrolments as $enrol){
                if($enrol->Event){
                 array_push($events,$enrol->Event) ; 
                }
            }  
             return response(array('events'=>$events),200);  
         }
         public function last_course(){
            $courses = Course::orderBy('created_at', 'desc')->get() ;
            return response($courses[0] ,200);  
         }

    

    public function course_chapters(Request $request){
        $validated = $request->validate(['course'=>'numeric']) ; 
        $course = Course::find($request->input('course'));
        if($course){
            return response($course->Chapters ,200);
        } return 'invalid request';
    }


    public function enrol_event(Request $request)
    {
        if($request->input('e_id')){
            $enrolment  = DB::table('enrolements')
                    ->where('user_id','=',Auth::user()->id)
                    ->where('event_id','=',$request->input('e_id')) 
                    ->get() ; 
        if($enrolment!='[]'){
            return response('already enrolled') ; 
        }
        if(Event::find($request->input('e_id'))){
            $enrolement  = new Enrolement  ;
            $enrolement->event_id = $request->input('e_id');
            if (Auth::check()) {
                $enrolement->user_id = Auth::user()->id ;
            }else{
                return "login" ; 
            }
            $enrolement->save() ; 
            $user = Auth::user() ; 
            return response("successful enrollment",201) ;
            } return response('invalid request') ; 
        }return 'invalid request : check sent data ! ';
        
    }


    public function enrol_course(Request $request)
    {

        if($request->input('c_id')){
            $enrolment  = DB::table('enrolements')
            ->where('user_id','=',Auth::user()->id)
            ->where('course_id','=',$request->input('c_id')) 
            ->get() ; 
        if($enrolment!='[]'){
            return response('already enrolled') ; 
        }
        if(Course::find($request->input('c_id'))){
            $enrolement  = new Enrolement  ;
            $enrolement->course_id = $request->input('c_id');
            $enrolement->user_id = Auth::user()->id ;
            $enrolement->save() ; 
            $user = Auth::user() ; 
            return response("successful enrollment",201) ;
            } return response('invalid request') ; 
        }else 'invalid request : check sent data !' ;
    }
    
    public function update_profile(Request $request){
        $validated=$request->validate([
            'name'=>'string|required',
            'email'=>'email|required',
            'phone_number'=>'required|numeric',
            'password'=>'confirmed',
        ]);
        $user = Auth::user();
        $user->name = $request['name'] ;
        $user->phone_number = $request['phone_number'];
        $user->email = $request['email'] ;
        if($request['password']!=''){
            $user->password = Hash::make($request['password']) ; 
        }else $user->password = $user->password ; 
        $user->save();
        return response('success',201);
    }
}