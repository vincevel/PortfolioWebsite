<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Dcblogdev\MsGraph\Facades\MsGraph;

class AuthController extends Controller
{
 
public function login()
    {

	echo "hello";
        return view('auth.login');
    }

    public function connect()
    {
        return MsGraph::connect("7d68325b-daeb-4a0d-8442-55e335bc2bb7");
    }

    public function logout()
    {
        return MsGraph::disconnect();
    }   //
}
