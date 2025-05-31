<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UgButtonController extends Controller
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
    public function store(Request $r1)
    {
    $type = $r1->type;
    //$lang= ($r1->lang == "swedish") ? "swedish": "";
    //$lang= ($r1->lang == "french") ? "french": "";
    //$lang= ($r1->lang == "dutch") ? "dutch": "";

    $lang = $r1->lang ?? "english";
    $href = [];

    if ($type == "normal"){

       if ($lang == "swedish"){
        $href[] = "https://drive.google.com/file/d/1mVu35ojajlMvBHZQZTz6VYm8sRXdTmuL/view?usp=sharing";
       } else if ($lang == "french") {
        $href[] = "https://drive.google.com/file/d/1sRZaFFU66UoXRkN-k58dlvJMaNx7I7WY/view?usp=sharing";
       } else if ($lang == "dutch") {
        $href[] = "https://drive.google.com/file/d/1S9x_tDhE_TEVu0P2idy9Kc0bKWD_WfUS/view?usp=share_link";
       } else {
        $href[] = "https://drive.google.com/file/d/11BLhiYJfrLmQeaVt_UlHkCwgXyBnBrDa/view?usp=sharing";
       } 
    }else {
        //giver case
       if ($lang == "swedish"){
        $href[] = "https://drive.google.com/file/d/1BCvfas1U4adv4sT_dCySlMfkeR2IdaTV/view?usp=sharing";
       } else if ($lang == "french"){
        $href[] = "https://drive.google.com/file/d/1wMC2o6qCqlfRny3pCPSnb5NoqSq6xu4-/view?usp=share_link";
       } else if ($lang == "dutch"){
        $href[] = "https://drive.google.com/file/d/1_beqsJgyXtWKEDBYe2-UeIeqorMd75Ow/view?usp=share_link";
       } else {
        $href[] = "https://drive.google.com/file/d/1MRTAjVFyOFEcQT6DpiesQRdmPTzRhLiL/view?usp=sharing";
       } 
    }

    return response()->json($href);
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
