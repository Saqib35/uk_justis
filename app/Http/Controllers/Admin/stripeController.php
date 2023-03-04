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
            'stripe_product_id'=>$req->stripe_product_id,
            'price_one'=>$req->price1,
            'stripe_price_id_one'=>$req->stripe_price_id1,
            'duration_one'=>$req->duration1,
            'price_two'=>$req->price2,
            'stripe_price_id_two'=>$req->stripe_price_id2,
            'duration_two'=>$req->duration2,
            'price_three'=>$req->price3,
            'stripe_price_id_three'=>$req->stripe_price_id3,
            'duration_three'=>$req->duration3,
            'price_four'=>$req->price4,
            'stripe_price_id_four'=>$req->stripe_price_id4,
            'duration_four'=>$req->duration4,
            'include_one'=>$req->include_one,
            'include_two'=>$req->include_two,
            'include_three'=>$req->include_three,
            'include_four'=>$req->include_four,
            'include_five'=>$req->include_five,
            'include_six'=>$req->include_six,
            'status'=>"on",
           ]);
            
               
           return redirect()->back()->with('status','added');
      }
     
      public function addSubscriptionShow()
      {

            return view("admin.add-subscription");
   
      }



      public function allSubscriptionShow()
      {
            $subscription=Add_Subscription::get();
            return view("admin.all-subscription",['subscription'=>$subscription]); 
      }
    

      public function activeSubcription(REQUEST $req)
      {
           if($req->status=='on')
           {
              $status='off';

           }else{
             
               $status='on';
              
           }
            Add_Subscription::where('id', $req->id)
            ->update([
                'status' => $status
             ]);
 

             return redirect()->back()->with('status','updated');
      }

    public function delSubcription(REQUEST $req)
    {

      Add_Subscription::where('id', $req->id)->delete();
      return redirect()->back()->with('Del','Deleted Successfully');
    }


}
