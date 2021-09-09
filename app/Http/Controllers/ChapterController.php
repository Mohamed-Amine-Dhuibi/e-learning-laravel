<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;



class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'name' => 'required|string|max:100',
            'course_id'=>'required|integer',
            'video'=>'required|mimes:mp4,ogx,oga,ogv,ogg,webm,mkv',
        ]);
        if(Course::find($request->input('course_id'))){
            if(Course::find($request->input('course_id'))->tutor_id == Auth::user()->id){
                $chapter = new Chapter ;
                $chapter->name =$request->input('name')  ;
                $chapter->course_id =$request->input('course_id');
                if($request->hasFile('video')){
                    // Get filename with the extension
                    $filenameWithExt = $request->file('video')->getClientOriginalName();
                    // Get just filename
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    // Get just ext
                    $extension = $request->file('video')->getClientOriginalExtension();
                    $filename=str_replace(' ','',$filename);
                    // Filename to store
                    $fileNameToStore= $filename.'_'.time().'.'.$extension;
                    // Upload Image
                    $path = $request->file('video')->storeAs('public/'.Course::find($request->input('course_id'))->title.'/', $fileNameToStore);
                } else {
                    return 'invalid' ; 
                }
                $chapter->video = $fileNameToStore ;
                $chapter->save() ; 
                return redirect()->back();  
            }
         }else return 'course do not exsit !' ; 

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
