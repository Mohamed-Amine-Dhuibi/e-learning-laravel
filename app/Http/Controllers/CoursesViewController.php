<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Models\Category ;
use App\Models\Course ;
class CoursesViewController extends Controller
{
    public function index(){

        $cat =new  CategoryController ;
        $Cats = $cat->index() ; 
            
        return view('admin.courses.categories')->with($Cats);
    }
    
    
    public function delete($id){
        $course = Course::find($id) ; 
        if($course){
            $course->delete() ; 
            return redirect('/myspace/courses');
        }else  return "invalid request" ; 
    }
}
