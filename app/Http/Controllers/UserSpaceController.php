<?php

namespace App\Http\Controllers;
use App\Models\Course ;
use App\Models\User ;
use App\Models\Event ;
use Illuminate\Support\Facades\Auth ; 

use Illuminate\Http\Request;

class UserSpaceController extends Controller
{
    public function index(){
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
        return view('user.myspace')->with(["courses"=>$courses,"events"=>$events]) ; 
    }
}
