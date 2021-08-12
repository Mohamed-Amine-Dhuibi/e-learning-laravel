<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event ;

class EventsViewController extends Controller
{
    public function index(){


        return view('admin.Events.add_event'); 
    }
    
}
