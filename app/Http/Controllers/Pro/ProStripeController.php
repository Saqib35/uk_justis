<?php

namespace App\Http\Controllers\Pro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\Add_Subscription;
use App\Models\Pro\Pro_Stripe_Subcriptions;
use App\Models\User;
use Session;

class ProStripeController extends Controller
{
    public function stripe(REQUEST $req)
    {

        $hostwithHttp = request()->getSchemeAndHttpHost();
        $details=explode(',' , $req->selectPlan);
        $price_stripe=$details[2];


        Session::put('time-interval', $details[3]);
        Session::put('price', $details[1]);
        Session::put('plan_id', $details[0]);
        
        
        require base_path('app/Http/stripe/vendor/autoload.php');
       \Stripe\Stripe::setApiKey(getenv("STRIPE_TEST_SECRET_KEY"));
        $checkout_session = \Stripe\Checkout\Session::create([
            'success_url' => $hostwithHttp.'/stripe-success/{CHECKOUT_SESSION_ID}',
            'cancel_url' => 'http://localhost/stripe_sub/cancel.html',
            'payment_method_types' => ['card'],
            'mode' => 'subscription',
            'customer_email'=> Auth::user()->email,
            'line_items' => [[
            'price' => $price_stripe,
            // For metered billing, do not pass quantity
            'quantity' => 1,
            ]],
        ]);

 
          return view("pro.stripe-show-page",['checkout_session'=>$checkout_session]);

    }

    public function stripePlanShowPro()
    {
      $proPlan=Add_Subscription::where('status','on')->get();
      return view("pro.stripe-plan",["proPlan"=>$proPlan]);
    }
    
    public function stripeSuccessPro(REQUEST $req)
    {


      require base_path('app/Http/stripe/vendor/autoload.php');
      $stripe = new \Stripe\StripeClient(getenv("STRIPE_TEST_SECRET_KEY"));

      
        try {

        $session = $stripe->checkout->sessions->retrieve($req->session_id);
        $customer = $stripe->customers->retrieve($session->customer);
        $stripe_customer = $stripe->customers->retrieve($customer->id, [ 'expand' => ['subscriptions'] ]);
        $subscription_id = $stripe_customer->subscriptions->data[0]->id;
        $customer_id = $stripe_customer->id;
        $plan_id =  $stripe_customer->subscriptions->data[0]->plan->id;
        $currency = $stripe_customer->currency;
        

           Pro_Stripe_Subcriptions::create([
          'pro_id' =>  Auth::user()->id,
          'plan_id' => $plan_id,
          'email'=> Auth::user()->email,
          'subscription_id' => $subscription_id,
          'customer_id' => $customer_id,
          'plan_interval'=> Session::get('time-interval'),
          'plan_amount'=>Session::get('price'),   
          'plan_id_link'=>Session::get('plan_id'),
          'start_date'=>now()   
          ]);


          // active user plan change status


          User::where('id',Auth::user()->id)
        ->update([
            'Is_piad' => 'on'
          ]);
        http_response_code(200);



        return redirect()->route('pro-dashboard');

      } catch (Error $e) {


        http_response_code(500);
        echo json_encode(['error' => $e->getMessage()]);



      }




    }


    public  function SubcriptionPro()
    {
       $pro_active_sub=Pro_Stripe_Subcriptions::where("pro_id", Auth::user()->id)->orderBy('id', 'desc')->get();
       return view("pro.subscription",['pro_active_sub'=>$pro_active_sub]);
    }

      public function delProSubcription(REQUEST $req)
      {

      

    
        require base_path('app/Http/stripe/vendor/autoload.php');

        $stripe = new \Stripe\StripeClient(getenv("STRIPE_TEST_SECRET_KEY"));
        $ses= $stripe->subscriptions->retrieve(
          $req->subscription_id,
          []
        );
         $status=$ses->status;

       if($status=='active')
       {


        // if stripe subscription active then we cancel that subscription


        $cancel=$stripe->subscriptions->cancel(
          $req->subscription_id,
            []
          );
          

        Pro_Stripe_Subcriptions::where('id',$req->id)
        ->update([
            'expired_date' => now()
          ]);

        User::where('id',Auth::user()->id)
        ->update([
            'Is_piad' => 'off'
          ]);



       }else{


        Pro_Stripe_Subcriptions::where('id',$req->id)
        ->update([
            'expired_date' => now()
          ]);

        User::where('id',Auth::user()->id)
        ->update([
            'Is_piad' => 'off'
          ]);

        

       }
       return redirect()->back()->with('status','updated');
      }

      

      public function delProSubcriptionAdminPro(REQUEST $req)
      {

      
dd("check");
    
        require base_path('app/Http/stripe/vendor/autoload.php');

        $stripe = new \Stripe\StripeClient(getenv("STRIPE_TEST_SECRET_KEY"));
        $ses= $stripe->subscriptions->retrieve(
          $req->subscription_id,
          []
        );
         $status=$ses->status;

       if($status=='active')
       {


        // if stripe subscription active then we cancel that subscription


        $cancel=$stripe->subscriptions->cancel(
          $req->subscription_id,
            []
          );
          

        Pro_Stripe_Subcriptions::where('id',$req->id)
        ->update([
            'expired_date' => now()
          ]);

        User::where('id',Auth::user()->id)
        ->update([
            'Is_piad' => 'off'
          ]);



       }else{


        Pro_Stripe_Subcriptions::where('id',$req->id)
        ->update([
            'expired_date' => now()
          ]);

        User::where('id',Auth::user()->id)
        ->update([
            'Is_piad' => 'off'
          ]);

        

       }
       return redirect()->back()->with('status','updated');
      }


}
