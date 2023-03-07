

<?php
require 'vendor/autoload.php';
$stripe = new \Stripe\StripeClient('sk_test_51L2veGCBlNnwq5kHyAccYGFUzxhaxyzGka088URwY3RtNFwTHiv6ayVbuwmxkAOeaOTW8C3q6MWovIOjD9HVBQua00RZr8tb4U');

try {
  $session = $stripe->checkout->sessions->retrieve($_GET['session_id']);
  $customer = $stripe->customers->retrieve($session->customer);
 

  
  $stripe_customer = $stripe->customers->retrieve($customer->id, [ 'expand' => ['subscriptions'] ]);
  $stripe_status = $stripe_customer->subscriptions->data[0]->id;

  echo  "<pre>";
  print_r($stripe_status);
 
  echo "</pre>";
  
  

  http_response_code(200);
} catch (Error $e) {
  http_response_code(500);
  echo json_encode(['error' => $e->getMessage()]);
}

?>

<html>
  <head><title>Thanks for your order!</title></head>
  <body>
    <h1>Your monthly subscription is active!</h1>
    <p>
      We appreciate your time!
      If you have any questions, please email: gjhwatters@gmail.com
      <a href="index.php">HOME</a>.
    </p>
  </body>
</html>