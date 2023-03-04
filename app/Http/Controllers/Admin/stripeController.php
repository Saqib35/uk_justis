<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Add_Subscription;



class stripeController extends Controller
{
    
    
      public function addSubscription(REQUEST $req)
      {
        
           Add_Subscription::create([
            'plan_name' => $req->plan_name,
            'type'=>$req->type,
            'price'=>$req->price,
            'stripe_price_id'=>$req->stripe_price_id,
            'stripe_product_id'=>$req->stripe_product_id,
            'duration'=>$req->duration,
            'include_one'=>$req->include_one,
            'include_two'=>$req->include_two,
            'include_three'=>$req->include_three,
            'include_four'=>$req->include_four,
            'include_five'=>$req->include_five,
            'include_six'=>$req->include_six,
            'status'=>"on",
           ]);
            
            
            
            
          dd("check");
      }
    
    
}
