@extends('pro.layouts.master')

    @section('header_style')
     
       

    @endsection
    @section('main_content')

  
   
    @endsection

    
    @section('scriptlinks')
        <script src="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

        <script src="{{asset('admin/assets/plugins/moment/moment.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
        <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
        <script src="https://apexcharts.com/samples/assets/series1000.js"></script>
        <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
        <script src="{{asset('admin/assets/pages/jquery.dashboard.init.js')}}"></script>
        <script src="https://js.stripe.com/v3/"></script>
    @endsection


    @section('script_code')
    <script type="text/javascript">


     var stripe = Stripe(getenv("STRIPE_TEST_PUBLIC_KEY"));
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

     </script>

    @endsection