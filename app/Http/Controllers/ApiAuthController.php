<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Course;
use App\Models\Category;


use Illuminate\Http\Response;


class ApiAuthController extends Controller
{

    public function register(Request $request){
        $validated = $request->validate([
            'name'=>'required|string',
            'email'=>'email|required|string|unique:users,email',
            'phone_number'=>'required|numeric|unique:users,phone_number',
            'password'=>'required|string|confirmed'
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone_number'=> $request['phone_number'],
            'password' => Hash::make($request['password']),
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken ; 
        $response =[
            'user'=>$user,
            'token'=>$token,
        ] ; 
        return response($response,201);
    }

    public function logout(){
        auth()->user()->tokens()->delete() ;
        return [
            'message'=>'Logged out',
        ];
    }
    public function login(Request $request) {
        $validated = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check email
        $user = User::where('email', $validated['email'])->first();

        // Check password
        if(!$user || !Hash::check($validated['password'], $user->password)) {
            return response([
                'message' => 'Wrong Email/Password'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response($response, 201);
    }
    
}
