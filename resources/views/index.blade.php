@extends('layouts.main')
@section('main-container')

 
    <!--==============================Hero Area==============================-->
    <div class="as-hero-wrapper hero-1" id="hero">
        <div class="hero-slider-2 as-carousel" data-fade="true" data-slide-show="1" data-md-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true" data-lg-arrows="true">
         @foreach ($Slider as $Slider)
            <div class="as-hero-slide">
                <div class="as-hero-bg" data-bg-src="{{ url($Slider['img'])}}">
                    <div class="hero-shape"> <img src="{{ url($Slider['img'])}}" alt="shape"> </div>
                </div>
                <div class="container">
                    <div class="hero-style1"> <span class="hero-subtitle hero-subtitle-two" data-ani="slideindown" data-ani-delay="0.1s"><span class="text-white">{{ $Slider['title']  }}</span> <span class="shape"></span></span>
                        <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.0s">{{ $Slider['description']  }}</h1>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!--==============================Service Area ==============================-->
    <section class="service-sec" id="service-sec">
        <div class="container">
            <div class="service-wrapper style-1" >
                <div class="service-box  w-100">
                    <div class="service-box_inner w-100">
                        <div class="container">
                            <form class="form-horizontal form-material mb-0" action="" method="get">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div>
                                        <select class="form-control" name="category_id" id="category-id">
                                            <option selected disabled>Choose Category</option>
                                            @foreach($pro_categories as $pro_category)
                                                <option value="{{$pro_category->id}}">{{$pro_category->name}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                        <div class="mt-3">
                                            <input type="text" class="form-control" name="city" placeholder="City Name" maxlength="255">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div>
                                        <select class="form-control" name="sub_category_id" id="sub-category-id">
                                            <option selected disabled>Choose Sub Category</option>
                                        </select>
                                        </div>
                                        <div class="mt-3">
                                            <input type="text" class="form-control" name="pro_name" placeholder="Pro Name" maxlength="255">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div>
                                            <select class="form-control" name="country" id="country-id">
                                                <option selected disabled>Choose Country</option>
                                                @foreach($countries as $country)
                                                <option value="{{$country->sortname}}">{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mt-3">
                                            <input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
                                        </div>
                                    </div>
                                    <div class="col-md-3 align-center">
                                    <div class="top-button align-center" style="margin-top:40px"> 
                                        <button class="as-btn white-btn" type="submit">Search</button> </div>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
               
                
            </div>
        </div>
    </section>
    <!--==============================About Area ==============================-->
    <section>
    @if(Session::has('search_result') && isset($pro_users))
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="profile-tabContent">
                            <div class="tab-pane fade  show active" id="profile-settings">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mt-0 header-title">All Professionals Result</h4>
                                    </div>
                                    @isset($pro_users)
                                    @foreach($pro_users as $pro)
                                    <div class="col-md-4">
                                        <div class="card" >
                                            <img class="card-img-top" src="{{asset($pro->profile_img)}}" alt="Card image" style="width:100%">
                                            <div class="card-body">
                                                <h4 class="card-title">{{$pro->first_name}} {{$pro->last_name}}</h4>
                                                <p class="card-text">
                                                    @foreach($pro_categories as $pro_category)
                                                        @if($pro_category->id==$pro->category_id)
                                                            {{$pro_category->name}}
                                                            @break
                                                        @endif
                                                    @endforeach
                                                </p>
                                                <p class="card-text">
                                                    {{$pro->address}}
                                                </p>
                                                <a href="#" class="btn btn-primary">See Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endisset


                                </div> <!--end col-->                                          
                            </div><!--end row-->
                        </div><!--end tab-pane-->
                    </div>  <!--end tab-content-->                                                                              
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div>
    @endif
    </section>
    
    
    
    
    
    <div class="bg-top-center mt-5">
        <div class="video-wrapper">
            <div class="video-item" data-bg-src="{{ $home_achievement[0]->img }}">
                <div class="video-box1"> <img src="{{ $home_achievement[0]->img }}" alt="video"> <a href="" class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a> </div>
            </div>
            <div class="video-item video-item-2" data-bg-src="{{ $home_achievement[0]->img }}">
                <div class="row align-items-center">
                    <div class="col-xxl-8 col-xl-12">
                        <div class="title-area"> <span class="sub-title"><img src="{{ url('assets/img/shape/title_right.svg')}}" alt="shape"></span>
                            <h2 class="sec-title text-white">{{ $home_achievement[0]->title }}</h2>
                            <p class="counter-desg mt-n2 mb-25 mr-n1">{{ $home_achievement[0]->detail }}</p>
                        </div>
                    </div>
                </div>
                <div class="counter-wrapper">
                    <div class="counter-card">
                        <div class="icon"> <img src="{{ url('assets/img/icon/check.svg')}}" alt=""> </div>
                        <h2 class="counter-card_number"><span class="counter-number">{{ $home_achievement[0]->complete_case_number }}</span>+</h2>
                        <p class="counter-card_text">{{ $home_achievement[0]->complete_case }}</p>
                    </div>
                    <div class="counter-card">
                        <div class="icon"> <img src="{{ url('assets/img/icon/user-group.svg')}}" alt=""> </div>
                        <h2 class="counter-card_number"><span class="counter-number">{{ $home_achievement[0]->expart_attorney_number }}</span>+</h2>
                        <p class="counter-card_text">{{ $home_achievement[0]->expart_attorney }}</p>
                    </div>
                </div>
                <div class="counter-wrapper">
                    <div class="counter-card">
                        <div class="icon"> <img src="{{ url('assets/img/icon/emoji.svg')}}" alt=""> </div>
                        <h2 class="counter-card_number"><span class="counter-number">{{ $home_achievement[0]->happy_clients_number }}</span>+</h2>
                        <p class="counter-card_text">{{ $home_achievement[0]->happy_clients }}</p>
                    </div>
                    <div class="counter-card">
                        <div class="icon"> <img src="{{ url('assets/img/icon/award.svg')}}" alt=""> </div>
                        <h2 class="counter-card_number"><span class="counter-number">{{ $home_achievement[0]->win_awards_number }}</span>+</h2>
                        <p class="counter-card_text">{{ $home_achievement[0]->win_awards }}</p>
                    </div>
                </div>
                <div class="shape-mockup jump-reverse d-none d-xl-block" data-top="30%" data-right="0%"><img src="{{ url('assets/img/shape/law.png')}}" alt="shape"></div>
            </div>
        </div>
    </div>
    <!--==============================Price Area ==============================-->
    <section class="space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="title-area text-center"> <span class="sub-title"><img src="{{ url('assets/img/shape/title_right.svg')}}" alt="shape"></span>
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
                            <div class="pricing-btn"> <a href="javascript:void(0)" class="as-btn shadow-none">choose plan</a> </div>
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
                            <div class="pricing-btn"> <a href="javascript:void(0)" class="as-btn shadow-none">choose plan</a> </div>
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
                            <div class="pricing-btn"> <a href="javascript:void(0)" class="as-btn shadow-none">choose plan</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
   <!--================================Contact US=====================================-->
  
   
@if(Session::has('status'))

<script>
swal("success", "Thank you for contacting us", "success");
</script>

@endif

    <form action='{{ url("customer-support") }}' method="POST" >
    @csrf
     <div class="space contact-section style4 background-image shape-mockup-wrap" style="background-image: url(&quot;assets/img/bg/contact_bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 offset-xxl-3 col-xl-8 offset-xl-2 col-lg-12">
                    <div class="title-area mb-35 text-center">
                        <h2 class="sec-title">Contact Support</h2>
                        <p class="mt-n2 mb-20">Objectively parallel task holistic initiatives through collaborative e-services. Interactively deploy backward-compatible total linkage.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                        <div class="row">
                            <div class="form-group col-md-6"> <i class="fal fa-user"></i> <input type="text" class="form-control" name="name" id="name" placeholder="Your Name"> </div>
                            <div class="form-group col-md-6"> <i class="fal fa-envelope"></i> <input type="email" class="form-control" name="email" id="email" placeholder="Your email"> </div>
                            <div class="form-group col-md-6"> <i class="fa-solid fa-mobile-screen-button"></i> <input type="tel" class="form-control" name="phone" id="number" placeholder="Phone Number"> </div>
                            <div class="form-group col-md-6"> <i class="fa-light fa-file"></i> <input type="text" class="form-control" name="subject" id="text" placeholder="Subject"> </div>
                            <div class="form-group col-12"> <i class="fa-thin fa-pencil"></i> <textarea name="note" id="message" cols="30" rows="3" class="form-control style3" placeholder="Your Message"></textarea> </div>
                            <div class="form-btn col-12 text-center"> <button class="as-btn">Send Message</button> </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                </div>
            </div>
        </div>
        <div class="shape-mockup jump d-none d-xl-block" style="top: 20%; left: 0%;"><img src="{{ url('assets/img/shape/law.png')}}" alt="shape"></div>
        <div class="shape-mockup jump-reverse d-none d-xl-block" style="top: 25%; right: 5%;"><img src="{{ url('assets/img/shape/balance.png')}}" alt="shape"></div>
     </div>
  </form>
   
    <!--********************************Code End Here ******************************** -->
    <!-- Scroll To Top -->
    <div class="scroll-top"> <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"> </path>
        </svg> </div>
 
@endsection