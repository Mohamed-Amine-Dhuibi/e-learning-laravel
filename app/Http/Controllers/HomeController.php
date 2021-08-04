<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserCoursesViewController ;
use App\Models\Category ;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            if(Auth::user()->privilege =='student'){
                return view('home')->with('categories',Category::where('status',1)->get()) ;     
            }else{
                return view('admin.dashboard');
            }
        }
        return "failed";
    }
}
