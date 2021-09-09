<?php

namespace App\Http\Controllers;
use App\Models\Course ;
use App\Models\User ;
use App\Models\Event ;
use Illuminate\Support\Facades\Auth ; 
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class UserSpaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
    public function profile(){
        $user = Auth::user() ;
        return view('user.profile')->with('user',$user) ; 
    }
    public function update_profile(Request $request){
        $validated=$request->validate([
            'name'=>'string|required',
            'email'=>'email|required',
            'phone_number'=>'required|numeric',
            'password'=>'confirmed',
            'profile_pic'=>'image|nullable|max:1999'
        ]);
        $user = Auth::user();
        $user->name = $request['name'] ;
        $user->phone_number = $request['phone_number'];
        $user->email = $request['email'] ;
        if($request['password']!=''){
            $user->password = Hash::make($request['password']) ; 
        }
        if($request->hasFile('profile_pic')){
            if($user->profile_pic != 'no_imagejpg'){
                unlink('./storage/profiles_pics/'.$user->profile_pic);
            }
            // Get filename with the extension
            $filenameWithExt = $request->file('profile_pic')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('profile_pic')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('profile_pic')->storeAs('public/profiles_pics', $fileNameToStore);
            //save image to database
            $user->profile_pic=$fileNameToStore;
        }
        
        $user->save();
        return redirect()->back();
    }
}
