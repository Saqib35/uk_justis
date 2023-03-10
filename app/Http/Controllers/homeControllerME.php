<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home_achievement;
use App\Models\Sliders;
use App\Models\Country;
use App\Models\Pro_Category;
use App\Models\Pro_Sub_Category;
use App\Models\User;
use Session;

class homeControllerME extends Controller
{
    public function index()
    {
        $countries=Country::all();  
        $home_achievement=home_achievement::get();
        $Sliders=Sliders::get();
        $pro_categories=Pro_Category::where('status',1)->get();

        if(isset($_GET['category_id']) || isset($_GET['sub_category_id']) || isset($_GET['country']) || isset($_GET['city']) || isset($_GET['pro_name']) || isset($_GET['zipcode']) ){
            
            $query = User::query();
            $query = $query->where('user_type', 'pro');
            $query = $query->where('status', 1);
            // $query = $query->where('Is_piad', 'on');
         
            if(isset($_GET['zipcode']) && !empty($_GET['zipcode'])){
                $query = $query->where('post_code', $_GET['zipcode']); 
            } 
            if(isset($_GET['country']) && !empty($_GET['country'])){
                $query = $query->where('country', $_GET['country']); 
            } 
            if(isset($_GET['sub_category_id']) && !empty($_GET['sub_category_id'])){
                $query = $query->whereJsonContains('sub_category_id', $_GET['sub_category_id']); 
            } 
            if(isset($_GET['category_id']) && !empty($_GET['category_id'])){
                $query = $query->where('category_id', $_GET['category_id']); 
            } 
            if(isset($_GET['pro_name']) && !empty($_GET['pro_name'])){
                $query = $query->where(DB::raw("concat(first_name, ' ', last_name)"), 'LIKE','%'.$_GET['pro_name'].'%');           
            }
            if(isset($_GET['city']) && !empty($_GET['city'])){
                $query = $query->where('city', 'LIKE','%'.$_GET['city'].'%'); 
            } 

            $Result_Pro = $query->get();
            session::flash('search_result',"ok");
            return view('index',['home_achievement'=>$home_achievement,"Slider"=>$Sliders,'countries'=>$countries,'pro_categories'=>$pro_categories,'pro_users'=>$Result_Pro]);
        }


        return view('index',['home_achievement'=>$home_achievement,"Slider"=>$Sliders,'countries'=>$countries,'pro_categories'=>$pro_categories]);
    }

    
    public function pricing()
    {
        return view('pricing');
    }
    

    
}
