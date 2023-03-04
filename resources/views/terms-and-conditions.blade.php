
@extends('layouts.main')
@section('main-container')

   
    <!--============================== Breadcumb============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ url('assets/img/breadcumb/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Term and condition</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
   <div class="container mt-5 mb-5 pt-5 pb-5">
       <div class="row">
           <div class="col-12">
               <?=  $Terms_Conditions[0]->content; ?>
           </div>
       </div>
   </div>
  
   <!--********************************Code End Here ******************************** -->
    <!-- Scroll To Top -->
    <div class="scroll-top"> <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"> </path>
        </svg> </div>

@endsection