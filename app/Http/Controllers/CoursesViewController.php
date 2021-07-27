<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;

class CoursesViewController extends Controller
{
    public function index(){


        $cat =new  CategoryController ;
        $Cats = $cat->index() ; 
            
        return view('admin.categories')->with($Cats);
    }
   
}
