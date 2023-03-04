@extends('layouts.main')
@section('main-container')
    <!--============================== Breadcumb============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ url('assets/img/breadcumb/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">FAQ</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>FAQ</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================Faq Area==============================-->
    <div class="space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="title-area text-center"> <span class="sub-title"><img src="{{ url('assets/img/shape/title_right.svg')}}" alt="shape">FAQ</span>
                        <h2 class="sec-title">Frequently asked questions.</h2>
                       
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="accordion-area accordion" id="qusAccordion">
                        @php 
                           $a=1
                        @endphp
                        @foreach($faq as $faq) 
                          <div class="accordion-card style2 ">
                            <div class="accordion-header" id="collapse-item-1"> <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{  $faq['id']   }}" aria-expanded="true" aria-controls="collapse-1">{{ $a++ }}  {{   $faq['question'] }}</button> </div>
                            <div id="collapse-{{  $faq['id']   }}" class="accordion-collapse collapse " aria-labelledby="collapse-item-1" data-bs-parent="#qusAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text"> {{   $faq['answer'] }}</p>
                                </div>
                            </div>
                        </div>
                       @endforeach
                    </div>
                 </div>
              </div>
        </div>
    </div>
   <!--********************************Code End Here ******************************** -->
    <!-- Scroll To Top -->
    <div class="scroll-top"> <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"> </path>
        </svg></div>
    <!--============================== All Js File============================== -->
@endsection