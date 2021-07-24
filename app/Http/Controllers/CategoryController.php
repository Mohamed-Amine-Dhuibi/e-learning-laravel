<?php

namespace App\Http\Controllers;
use App\Models\Category;
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
        
        $state =CategoryController::nb_cat() ;
        $categories = Category::orderBy('created_at','desc')->paginate(10);

        return view('admin.courses',['state'=>$state,'categories'=>$categories]) ; 
    }
    
    public function nb_cat(){

        $count = Category::count() ;
        $count == 0 ? $state = 0 : $state=1 ;   

        return $state ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'status' => 'required',
        ]);
        
        $cat = new Category ; 
        $cat->name = $request->input('name') ;
        $cat->status = $request->input('status');
        $cat->description = $request->input('description') ; 
        $cat->save() ; 
        $state =CategoryController::nb_cat() ;
        
        return redirect()->action('App\Http\Controllers\CategoryController@index') ; 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return view('admin.edit_cat')->with('category',$category);
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
            'status' => 'required',
        ]);

        $cat = Category::find($id) ; 
        $cat->name = $request->input('name') ;
        $cat->status = $request->input('status');
        $cat->description = $request->input('description') ; 
        $cat->save() ; 
        $state =CategoryController::nb_cat() ;
        
        return redirect()->action('App\Http\Controllers\CategoryController@index') ; 
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
        $cat->delete() ; 
        return redirect()->action('App\Http\Controllers\CategoryController@index')->with('success','deleted') ; 
    }
}
