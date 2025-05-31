<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Class_mapping;

class ClassMembershipController extends Controller
{
    public function store(Request $r1)
    {
        //
	$cm = new Class_mapping;
        $cm->class_id = $r1->class;
        $cm->class_type = $r1->class_type;
        $cm->save();
      
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
	$class = Class_mapping::where('class_id',$id)->take(1)->get();
        return $class[0]->class_type ?? 0;
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function edit($id)
    //{
        //
    //}

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
