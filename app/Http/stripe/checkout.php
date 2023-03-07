<?php
require 'vendor/autoload.php';



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


    // echo "<pre>";


    // print_r($checkout_session);

    // echo  "</pre>";
   
?>
<?php echo $checkout_session['id']; ?>
<head>
  <title>Stripe Subscription Checkout</title>
  <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
  <!-- <script type="text/javascript">
     var stripe = Stripe('pk_test_51L2veGCBlNnwq5kH6HUb5XouORPFEqhwbbyG5cUK7KF7IBWU89DrgXR7j3I7mLuh8tCheooH1q76hoVfJvEjm9rR00Nv6gTbZD');
     var session = "<?php echo $checkout_session['id']; ?>";
          stripe.redirectToCheckout({ sessionId: session })
                  .then(function(result) {
          // If `redirectToCheckout` fails due to a browser or network
          // error, you should display the localized error message to your
          // customer using `error.message`.
          console.log(result);
          if (result.error) {
            alert(result.error.message);
          }
        })
        .catch(function(error) {
          console.error('Error:', error);
        });          

  </script> -->
  
</body>
