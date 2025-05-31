<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	return "at index";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r1)
    {
	$type = $r1->type;
	$page = $r1->page;
	$lang= ($r1->lang == "swedish") ? "swe": "";

    $img = [];
    if ($type == "normal"){
	   $img[] = "https://www.vmvcore.com/public/Slide"."1".$type .$lang .".jpg";
       $img[] = "https://www.vmvcore.com/public/Slide"."2".$type .$lang .".jpg";
       $img[] = "https://www.vmvcore.com/public/Slide"."3".$type .$lang .".jpg";
       $img[] = "https://www.vmvcore.com/public/Slide"."4".$type .$lang .".jpg";
    }else {
       $img[] = "https://www.vmvcore.com/public/Slide"."1".$type .$lang .".jpg";
       $img[] = "https://www.vmvcore.com/public/Slide"."2".$type .$lang .".jpg";

    }

	return response()->json($img);
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
