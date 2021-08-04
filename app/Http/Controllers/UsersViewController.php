<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User ; 

class UsersViewController extends Controller
{
    public function all(){
        return view('admin.users.users')->with(['users'=>User::paginate(10)]) ; 
    }

}
