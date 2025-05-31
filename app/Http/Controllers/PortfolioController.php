<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Visit_log;
 


class PortfolioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
  
        // Get visitor IP address
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        
        // Get the current date and time
        $timestamp = date("Y-m-d H:i:s");
        
        // Get the accessed page URL
        $page = $_SERVER['REQUEST_URI'];
        
        // Prepare the log entry
        $logEntry = "[$timestamp] IP: $ipAddress visited $page\n";

        $log = new Visit_Log;
        $log->log = $logEntry;
        $log->save();
 
        return view('portfolio.portfolio');
    }
}
