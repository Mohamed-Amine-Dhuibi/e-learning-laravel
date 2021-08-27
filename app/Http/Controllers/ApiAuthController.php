<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiAuthController extends Controller
{

    public function register(Request $request){
        $validated = $request->validate([
            'name'=>'required|string',
            'email'=>'required|string',
            'phone_number'=>'required|numeric',
            'password'=>'required|string|confirmed'
        ]);
        return 1;
    }

}
