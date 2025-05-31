<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sheets;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class EGMailerController extends Controller
{
    //

public function mail3(){


}


public function mail(){

    //$data = [];
    //$data['title'] = "test title";
    //$data['body'] = "test body";
   
	$data['name'] = "Vincent Velasco";
	$data['instruction_code'] = "11223344";
	$data['book_code'] = "AABBCCDD";
	$data['date'] = "October 14, 2023";

    $receiver = "vincemvelasco@gmail.com";
    $cc = [];
    $cc[] = "vincentvelasco1232019@gmail.com";
   

     Mail::to($receiver)->cc($cc)->send(new TestMail($data));
   

}

     public function index()
    {   
        //
        $sheets = Sheets::spreadsheet('1q32ZAp4rFODHgZIdUNicxsP07SSM2rZmEX_CvUkVU7E')->sheet('list')->range('C1:C45')->all();

	$i = 1;


	$toupdate = [];
	//var_dump($sheets);
	foreach ($sheets as $item){

		echo $item[0];
		if (trim($item[0]) == "F"){
			Sheets::sheet('list')->range('C'.$i)->update([['T']]);
			//$toupdate[] = "C".$i;
		}
		//var_dump($item[$i]);
		$i++;
	}



}


    public function index2()
    {
        //
	$sheets = Sheets::spreadsheet('1q32ZAp4rFODHgZIdUNicxsP07SSM2rZmEX_CvUkVU7E')->sheet('list')->get();
        $header = $sheets->pull(0);
//dd($header);
        $posts = Sheets::collection($header, $sheets);
        $posts = $posts->take(100);
        
        $data = $posts->toArray();

	foreach ($data as $row){
		//foreach ($row as $field){
			var_dump($row);
		//}
		echo "<BR>";
	}


        return 1;
    }



}
