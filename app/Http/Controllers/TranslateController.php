<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("translations.index");
	return "aat index";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r1)
    {

     	$ch = curl_init();
	$search = ['"'];

	$newText = str_replace($search,"",$r1->text);

	$postRequest = array(
   	 	'text' => $newText,
    		'target_lang' => 'fr'
	);


	curl_setopt($ch, CURLOPT_URL,"https://api-free.deepl.com/v2/translate");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postRequest);

	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    		'Authorization: DeepL-Auth-Key dc3fc9d3-9a8a-dc59-b8dc-b658bb8f5a23:fx',
	));

	// In real life you should use something like:
	// curl_setopt($ch, CURLOPT_POSTFIELDS, 
	//          http_build_query(array('postvar1' => 'value1')));

	// Receive server response ...
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$server_output = curl_exec($ch);

        //var_dump($server_output);
	$output = $server_output;

	curl_close ($ch);


	//return response($server_output["translations"]["text"];
	//return "testing";
	return $server_output;
	//return response()->json($server_output);
	//return "At Store";
	//return response()->json($img);
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
