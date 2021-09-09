<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course ; 
use App\Models\Enrolement ; 
use Illuminate\Support\Facades\DB;
use App\Models\Event ; 


class EnrolementController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth')->only(['store']);
    }

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
    public function create($course_id)
    {
        $course = Course::find($course_id) ; 
        if($course){
            return view('user.enrolement')->with('course',$course) ; 
        }else return 'invalid request ' ; 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        if($request->input('c_id')){
                    $enrolment  = DB::table('enrolements')
                    ->where('user_id','=',Auth::user()->id)
                    ->where('course_id','=',$request->input('c_id')) 
                    ->get() ; 
        if($enrolment!='[]'){
            return redirect('/myspace/class/'.$request->input('c_id'))->with(["errors"=>"Already Subscribed"]) ; 
        }
        if(Course::find($request->input('c_id'))){
            $enrolement  = new Enrolement  ;
            $enrolement->course_id = $request->input('c_id');
            $enrolement->user_id = Auth::user()->id ;
            $enrolement->save() ; 
            $user = Auth::user() ; 
            return redirect('/courses') ; 
            } return 'invalid request' ; 
        }else if($request->input('e_id')){
            $enrolment  = DB::table('enrolements')
                    ->where('user_id','=',Auth::user()->id)
                    ->where('event_id','=',$request->input('e_id')) 
                    ->get() ; 
        if($enrolment!='[]'){
            return redirect('/courses') ; 
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
            return redirect('/myspace') ; 
            } return 'invalid request' ; 
        }
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function event_enroll($id){
        $event = Event::find($id) ;
        if($event){
            return view('event_enrol')->with('event',$event) ;
        }else return 'invalid request' ;  
    }
    
}
