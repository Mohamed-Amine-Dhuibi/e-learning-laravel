<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User ; 

class UsersViewController extends Controller
{
    public function all(){
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
            $user->delete() ; 
        return redirect()->back() ; 
        }else return 'invalid request' ; 
        
    }
}
