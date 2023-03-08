<?php

namespace App\Http\Controllers\Pro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProStripeController extends Controller
{
    public function stripe()
    {
      
      require base_path('app/Http/stripe/vendor/autoload.php');
      

        \Stripe\Stripe::setApiKey('sk_test_51L2veGCBlNnwq5kHyAccYGFUzxhaxyzGka088URwY3RtNFwTHiv6ayVbuwmxkAOeaOTW8C3q6MWovIOjD9HVBQua00RZr8tb4U');
        $checkout_session = \Stripe\Checkout\Session::create([
            'success_url' => 'http://localhost/stripe_sub/success.php?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => 'http://localhost/stripe_sub/cancel.html',
            'payment_method_types' => ['card'],
            'mode' => 'subscription',
            'line_items' => [[
            'price' => "price_1M52beCBlNnwq5kHAzcq0YJR",
            // For metered billing, do not pass quantity
            'quantity' => 1,
            ]],
        ]);

   echo "<pre>";
   print_r($checkout_session);
   echo  "</pre>";

      
      
      
      dd("check");
    }
}
