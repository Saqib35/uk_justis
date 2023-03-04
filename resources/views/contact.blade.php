@extends('layouts.main')
@section('main-container')
    <!--============================== Breadcumb============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ url('assets/img/breadcumb/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================Contact Area ==============================-->
       
@if(Session::has('status'))

<script>
swal("success", "Thank you for contacting us", "success");
</script>

@endif

    <div class="space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="map-sec"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuzsoft!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe> </div>
                    <div class="contact-info-wrap">
                        <h3>Contact Info</h3>
                        <div class="contact-info-wrapper">
                            <div class="contact-info">
                                <h4 class="contact-info_title">Telephone Number:</h4>
                                <div class="contact-wrpp">
                                    <div class="contact-info_icon"> <i class="fat fa-phone"></i> </div>
                                    <div class="media-body"> <span class="contact-info_text"> <a href="tel:{{ $headerFooter[0]->phone  }}">{{ $headerFooter[0]->phone  }}</a> </span> </div>
                                </div>
                            </div>
                            <div class="contact-info">
                                <h4 class="contact-info_title">Mail Address:</h4>
                                <div class="contact-wrpp">
                                    <div class="contact-info_icon style2"> <i class="fat fa-envelope"></i> </div>
                                    <div class="media-body"> <span class="contact-info_text"> <a href="mailto:contact@justiscall.com">{{ $headerFooter[0]->email_office  }}</a></span> </div>
                                </div>
                            </div>
                            <div class="contact-info">
                                <h4 class="contact-info_title">Office Address:</h4>
                                <div class="contact-wrpp">
                                    <div class="contact-info_icon style3"> <i class="fat fa-location-dot"></i> </div>
                                    <div class="media-body"> <span class="contact-info_text">{{ $headerFooter[0]->address_office  }} </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space contact-section style4" data-bg-src="{{ url('assets/img/bg/contact_bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 offset-xxl-3 col-xl-8 offset-xl-2 col-lg-12">
                    <div class="title-area mb-35 text-center">
                        <h2 class="sec-title">Send Us a Messages</h2>
                        <p class="mt-n2 mb-20">Objectively parallel task holistic initiatives through collaborative e-services. Interactively deploy backward-compatible total linkage.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                     <form action='{{ url("customer-support") }}' method="POST" >
                     @csrf
                        <div class="row">
                            <div class="form-group col-md-6"> <i class="fal fa-user"></i> <input type="text" class="form-control" name="name" id="name" placeholder="Your Name"> </div>
                            <div class="form-group col-md-6"> <i class="fal fa-envelope"></i> <input type="email" class="form-control" name="email" id="email" placeholder="Your email"> </div>
                            <div class="form-group col-md-6"> <i class="fa-solid fa-mobile-screen-button"></i> <input type="tel" class="form-control" name="phone" id="number" placeholder="Phone Number"> </div>
                            <div class="form-group col-md-6"> <i class="fa-light fa-file"></i> <input type="text" class="form-control" name="subject" id="text" placeholder="Subject"> </div>
                            <div class="form-group col-12"> <i class="fa-thin fa-pencil"></i> <textarea name="note" id="message" cols="30" rows="3" class="form-control style3" placeholder="Your Message"></textarea> </div>
                            <div class="form-btn col-12 text-center"> <button class="as-btn">Send Message</button> </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="20%" data-left="0%"><img src="{{ url('assets/img/shape/law.png')}}" alt="shape"></div>
        <div class="shape-mockup jump-reverse d-none d-xl-block" data-top="25%" data-right="5%"><img src="{{ url('assets/img/shape/balance.png')}}" alt="shape"></div>
    </div>
 
  
    <!--********************************Code End Here ******************************** -->
    <!-- Scroll To Top -->
    <div class="scroll-top"> <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"> </path>
        </svg></div>
@endsection