<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class UserCoursesViewController extends Controller
{
    public function index(){
        $cats = Category::where('status',1);
        return $cats ;
        /**view('home')->with('categories',$cats);*/ 
    }
}
