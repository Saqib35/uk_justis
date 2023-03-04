@extends('layouts.main')
@section('main-container')
<!--============================== Breadcumb============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ url('assets/img/breadcumb/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Our Price</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Our Price</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================Price Area ==============================-->
    <section class="space bg-top-center" data-bg-src="{{ url('assets/img/bg/pricing_bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="title-area text-center"> <span class="sub-title"><img src="{{ url('assets/img/shape/title_right.svg')}}" alt="shape">Our Pricing Plans</span>
                        <h2 class="sec-title">See Our Best Pricing Plan</h2>
                        <p class="mt-n2 mb-35">Rapidiously orchestrate 2.0 users with corporate manufactured products. Completely productivate leveraged deliverables after 24/365 applications.</p>
                    </div>
                </div>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="price-card ">
                        <div class="price-wrpper">
                            <div class="price-plan">
                                <h3 class="price-card_title box-title">Economic</h3>
                            </div>
                            <h4 class="price-card_price"> <span class="currency">$</span>40 <span class="duration">/Per Month</span> </h4>
                        </div>
                        <div class="price-card_content">
                            <div class="available-list">
                                <ul>
                                    <li>Protecting your intellectual</li>
                                    <li>Employment contracts</li>
                                    <li>Save all property</li>
                                    <li class="unavailable">Tax consultations</li>
                                    <li class="unavailable">Protecting of all services</li>
                                    <li class="unavailable">24/7 hours per day Consultation</li>
                                </ul>
                            </div>
                            <div class="pricing-btn"> <a href="" class="as-btn shadow-none">choose plan</a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="price-card ">
                        <div class="price-wrpper">
                            <div class="price-plan">
                                <h3 class="price-card_title box-title">Standard</h3>
                            </div>
                            <h4 class="price-card_price"> 60 <span class="currency">$</span> <span class="duration">/Per Month</span> </h4>
                        </div>
                        <div class="price-card_content">
                            <div class="available-list">
                                <ul>
                                    <li>Protecting your intellectual</li>
                                    <li>Employment contracts</li>
                                    <li>Save all property</li>
                                    <li>Tax consultations</li>
                                    <li class="unavailable">Protecting of all services</li>
                                    <li class="unavailable">24/7 hours per day Consultation</li>
                                </ul>
                            </div>
                            <div class="pricing-btn"> <a href="" class="as-btn shadow-none">choose plan</a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="price-card ">
                        <div class="price-wrpper">
                            <div class="price-plan">
                                <h3 class="price-card_title box-title">Premium</h3>
                            </div>
                            <h4 class="price-card_price"> 90 <span class="currency">$</span> <span class="duration">/Per Month</span> </h4>
                        </div>
                        <div class="price-card_content">
                            <div class="available-list">
                                <ul>
                                    <li>Protecting your intellectual</li>
                                    <li>Employment contracts</li>
                                    <li>Save all property</li>
                                    <li>Tax consultations</li>
                                    <li>Protecting of all services</li>
                                    <li>24/7 hours per day Consultation</li>
                                </ul>
                            </div>
                            <div class="pricing-btn"> <a href="" class="as-btn shadow-none">choose plan</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    
    <!--********************************Code End Here ******************************** -->
    <!-- Scroll To Top -->
    <div class="scroll-top"> <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"> </path>
        </svg></div>
@endsection
