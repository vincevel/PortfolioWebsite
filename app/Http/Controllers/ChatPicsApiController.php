<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatPicsApiController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$test = $request->all();
        
        
        //dd($test);
        
        //return "hello";
        //$imageName = time().'.'.$request->image->extension();  
     
        //$request->file_contents->move(public_path('images'), $imageName);
  
        $request->file_contents->move(public_path('chat'),$request->filename);
        //return "hello";
        /* Store $imageName name in DATABASE from HERE */
    
       // return back()
       //     ->with('success','You have successfully upload image.')
       //     ->with('image',$imageName); 
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
