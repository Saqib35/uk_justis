@extends('client.layouts.main')
@section('header_style')
    <title>Justis Call  Client login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by mannatthemes" name="description" />
    <meta content="CodeHub" name="author" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet"/>
@endsection

@section('main_content')
<!-- Log In page -->
<div class="row vh-100">
            <div class="col-lg-6  pr-0">
                <div class="card mb-0 shadow-none">
                    <div class="card-body">
                        
                        <div class="px-3">
                            <div class="media">
                                <a href="{{ url('/') }}" class="logo logo-admin"><img src="{{ asset('assets/img/logo.png') }}" height="55" alt="logo" class="my-3"></a>
                                <div class="media-body ml-3 align-self-center">                                                                                                                       
                                    <h4 class="mt-0 mb-1">Login on Justiscall</h4>
                                </div>
                            </div>                            
                            
                            <form class="form-horizontal my-4" action="{{ route('login') }}" method="post">
                                @csrf
                                <input type="hidden" name="user_type" value="client">
    
                                <div class="form-group">
                                    <label for="mobile">Enter Phone Number</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="mobile" placeholder="Enter Phone Number" maxlength="50" required style="width:100%" value="{{old('mobile')}}">
                                    </div>                                    
                                </div>
                                @if(Session::has('sent_otp') || old('otp'))
                                <div class="form-group">
                                    <label for="otp">Enter OTP</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="otp" placeholder="Enter OTP" maxlength="4" required name="otp">
                                    </div>                                    
                                </div>
                                @endif

                                
                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Send OTP <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div>
                                </div>                            
                            </form>
                        </div>
                        <div class="account-social text-center">
                            <h6 class="my-4">Or Login With</h6>
                            <ul class="list-inline mb-4">
                                <li class="list-inline-item">
                                    <a href="" class="">
                                        <i class="fab fa-google google"></i>
                                    </a>                                    
                                </li>
                            </ul>
                        </div>
                        <div class="m-3 text-center bg-light p-3 text-primary">
                            <h5 class="">Don't have an account ? </h5>
                            <a href="{{  url('client/register') }}" class="btn btn-primary btn-round waves-effect waves-light">Sign Up</a>                
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-0 d-flex justify-content-center">
                <div class="accountbg d-flex align-items-center"> 
                    <div class="account-title text-white text-center">
                        <img src="admin/assets/images/logo-sm.png" alt="" class="thumb-sm">
                        <h4 class="mt-3">Welcome To Frogetor</h4>
                        <div class="border w-25 mx-auto border-primary"></div>
                        <h1 class="">Let's Get Started</h1>
                        <p class="font-14 mt-3">Don't have an account ? <a href="{{  url('client/register') }}" class="text-primary">Sign up</a></p>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- End Log In page -->
@endsection


@section('script_code')
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
<script>
    var phone_number = window.intlTelInput(document.querySelector("#mobile"), {
    separateDialCode: true,
    preferredCountries:["FR"],
    hiddenInput: "mobile",
    
    utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
    });
</script>

@endsection