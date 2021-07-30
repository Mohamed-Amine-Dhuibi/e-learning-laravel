<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Models\Category ;
class CoursesViewController extends Controller
{
    public function index(){


        $cat  = "Category::where('status',1) ; "
        return $cat;
    }
   
}
