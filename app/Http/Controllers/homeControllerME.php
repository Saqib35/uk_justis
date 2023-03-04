<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home_achievement;

class homeControllerME extends Controller
{
    public function index()
    {
        
    $home_achievement=home_achievement::get();

    
     return view('index',['home_achievement'=>$home_achievement]);
   
    }

    
    public function pricing()
    {
        return view('pricing');
    }
    

    
}
