<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class Client_Controller extends Controller
{
    //
    public function show_profile_page(){
        $countries=Country::all();  
        return view("client.page-profile",['countries'=>$countries]);
    }
}
