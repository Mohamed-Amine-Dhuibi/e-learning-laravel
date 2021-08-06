<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
       
     

    public function index()
    {
        
        $count =CategoryController::nb_cat() ;
        $categories = Category::orderBy('created_at','desc')->paginate(10);

        return ['count'=>$count,'categories'=>$categories] ; 
    }
    
    public function nb_cat(){

        $count = Category::count() ;
        return $count;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.courses.create_cat') ; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'bail|required|max:255',
            'description'=>'required|max:255', 
            
        ]);
        
        $cat = new Category ; 
        $cat->name = $request->input('name') ;
        $cat->status = $request->input('status');
        $cat->description = $request->input('description') ; 
        $cat->save() ; 
        $state =CategoryController::nb_cat() ;
        
        return redirect()->action('App\Http\Controllers\CoursesViewController@index') ; 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id) ; 
        $courses = $category->Courses ;

        return ['courses'=>$courses,'category'=>$category] ; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category =  Category::find($id);
        return view('admin.courses.edit_cat')->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'bail|required|max:255',
            'description'=>'required|max:255',
        ]);

        $cat = Category::find($id) ; 
        if($cat){
            $cat->name = $request->input('name') ;
            $cat->status = $request->input('status');
            $cat->description = $request->input('description') ; 
            $cat->save() ; 
            return redirect()->action('App\Http\Controllers\CoursesViewController@index') ; 
        }else return 'invalid request' ; 
        
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Category::find($id) ; 
        if($cat){
            $cat->delete() ; 
        return redirect()->action('App\Http\Controllers\CoursesViewController@index')->with('success','deleted') ; 
        }else return 'invalid request' ; 
        
    }
}
