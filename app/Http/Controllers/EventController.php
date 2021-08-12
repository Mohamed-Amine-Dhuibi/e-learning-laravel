<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event ; 

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Events.events')->with('events',Event::get()->all()); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Events.add_event') ; 
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
            'cover_image'=>'image|nullable|max:1999',
            'status'=>'nullable',
            'date'=>'required', 
            'fees'=>'required|numeric', 
            
        ]);
        /* handle file upload*/
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
		
	   
		
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        
        $event = new Event ; 
        $event->name = $request->input('name') ;
        $event->status = $request->input('status');
        $event->date = $request->input('date') ; 
        $event->description = $request->input('description') ; 
        $event->fees = $request->input('fees') ; 
        $event->cover_image = $fileNameToStore ; 
        $event->save() ; 
        return redirect()->back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        if ($event){
            return view('admin.Events.event')->with('event',$event) ;

        }else return 'invalid request' ; 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event= Event::find($id) ; 
        if($event){
            return view('admin.Events.edit_event')->with('event',$event);

        }else return 'invalid request' ; 
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
            'cover_image'=>'image|nullable|max:1999',
            'status'=>'nullable',
            'date'=>'required', 
            'fees'=>'required|numeric', 
            
        ]);
        $event = Event::find($id) ;
        if($event){
            /* handle file upload*/
            if($request->hasFile('cover_image')){
                // Get filename with the extension
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            
        
            
                } else {
                    $fileNameToStore = $event->cover_image;
                }
        
            $event->name = $request->input('name') ;
            $event->status = $request->input('status');
            $event->date = $request->input('date') ; 
            $event->description = $request->input('description') ; 
            $event->fees = $request->input('fees') ; 
            $event->cover_image = $fileNameToStore ; 
            $event->save() ; 
            return EventController::index(); 
        }else{
            return 'invalid request' ; 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id) ; 
        if($event){
            $event->delete() ;
            return EventController::index();  
        }else return 'event not found !' ; 
    }
}
