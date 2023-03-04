<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home_achievement;
use App\Models\Sliders;

class homeControllerME extends Controller
{
    public function index()
    {
        
    $home_achievement=home_achievement::get();
    $Sliders=Sliders::get();
    
     return view('index',['home_achievement'=>$home_achievement,"Slider"=>$Sliders]);
   
    }

    
    public function pricing()
    {
        return view('pricing');
    }
    

    
}
