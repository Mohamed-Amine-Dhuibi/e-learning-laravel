<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User ; 
use App\Models\Enrolement ; 


class UsersViewController extends Controller
{
    public function all(){
        return view('admin.users.users')->with(['users'=>User::paginate(10)]) ; 
    }
    public function type($type){
        switch($type){
            case 'student' : return view('admin.users.users')->with(['users'=>User::where('privilege','student')->paginate(10)]) ;
            case 'tutor' : return view('admin.users.users')->with(['users'=>User::where('privilege','tutor')->paginate(10)]) ;
            case 'admin' : return view('admin.users.users')->with(['users'=>User::where('privilege','admin')->paginate(10)]) ;
        }
        return view('admin.users.users')->with(['users'=>User::paginate(10)]) ; 
    }


    public function edit_user($id){
        return 'edit page' ; 
    }
    public function profile($id){
        $user = User::find($id) ; 
        if($user){
            return view('user.profile')->with('user',$user);
        }else return 'user not found'; 
    }
    public function delete_user($id){
        $user = User::find($id) ; 
        if($user){
            $enrolements = Enrolement::where('user_id',$id) ;  
            $enrolements->delete() ; 
            $user->delete() ; 
        return redirect()->back() ; 
        }else return 'invalid request' ; 
        
    }
}