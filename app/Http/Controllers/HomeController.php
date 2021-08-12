<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class HomeController extends Controller
{

    public function index(){
      $events=Event::where('status','1')->get()  ;
      return view('welcome')->with(['events'=>$events]) ;
    }

}
