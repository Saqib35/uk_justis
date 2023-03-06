@extends('client.layouts.main')
@section('header_style')
    <meta charset="utf-8" />
    <title>Justis Call</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="Codehub" name="author" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet"/>
@endsection


@section('main_content')
<div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="card mb-0 shadow-none">
                        <div class="card-body">  
                            <div class="px-3">
                                <div class="media">
                                    <a href="{{url('/')}}" class="logo logo-admin"><img src="{{ asset('assets/img/logo.png')}}" height="55" alt="logo" class="my-3"></a>
                                    <div class="media-body ml-3 align-self-center">   
                                        <h4 class="mt-0 mb-1">Free Register for Justis Call</h4>
                                        <p class="text-muted mb-0">Get your free Justis Call account now.</p>
                                    </div>
                                </div>                            
                                
                                <form class="form-horizontal my-4" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="fName">First Name</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                                </div>
                                                <input type="text" class="form-control " id="fName" placeholder="Enter First Name" name="first_name" maxlength="255" required value="{{old('first_name')}}">
                                                @error('first_name')
                                                    <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>                                    
                                        </div>

                                        <div class="form-group col-sm-6 col-xs-12">
                                             <label for="lName">Last Name</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="lName" placeholder="Enter Last Name" name="last_name" maxlength="255" required value="{{old('last_name')}}">
                                                @error('last_name')
                                                    <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>                                    
                                        </div>
                                    
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="eMial">Email Address</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon2"><i class="mdi mdi-email-outline font-16"></i></span>
                                                </div>
                                                <input type="email" class="form-control" id="eMial" name="email" placeholder="Email Address" maxlength="255" required value="{{old('email')}}">
                                                @error('email')
                                                    <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>                                     
                                        </div>
        
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="mobile">Phone Number</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="mobile" placeholder="Enter Phone Number"  maxlength="50" required value="{{old('mobile')}}">
                                                @error('mobile')
                                                    <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>                                
                                        </div>

                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="category">Gender</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-gender-male-female font-16"></i></span>
                                                </div>
                                                <select class="form-control" name="gender" required>
                                                    <option @if(!old('gender')) selected @endif disabled>Choose Gender</option>
                                                    <option value="Male" @if(old('gender')=='Male') selected @endif>Male</option>
                                                    <option value="Female" @if(old('gender')=='Female') selected @endif>Female</option>
                                                </select>
                                                @error('gender')
                                                    <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>                                
                                        </div>

                                        <div class="form-group col-sm-6 col-xs-12">
                                           <label for="category">Country</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-city font-16"></i></span>
                                                </div>
                                                <select class="form-control" name="country" required>
                                                    <option @if(!old('country')) selected @endif disabled>Choose Country</option>
                                                    @foreach($countries as $country)
                                                    <option value="{{$country->sortname}}" @if(old('country')==$country->sortname) selected @endif>{{$country->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('country')
                                                    <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>                            
                                        </div>

                                        <div class="col-sm-12 col-xs-12">
                                            <input type="checkbox" id="terms_conditions" name="" required>
                                            <label for="terms_conditions"> Accept Terms & Conditions</label>
                                        </div>
                                        
                                    </div>

                                    
                                    <div class="form-group mb-0 row">
                                        <div class="col-3 mt-2"></div>
                                        <div class="col-6 mt-2">
                                            @csrf
                                            <input type="hidden" value="client" name="user_type">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register<i class="fas fa-sign-in-alt ml-1"></i></button>
                                        </div>
                                    </div>                            
                                </form>

                            </div>
                            
                            <div class="m-3 text-center bg-light p-3 text-primary">
                                <h5 class="">Already have an account ? </h5>
                                <p class="font-13">Login Frogetor Now</p>
                                <a href="{{url('client/login')}}" class="btn btn-primary btn-round waves-effect waves-light px-3">Log in</a>                
                            </div>                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 px-0">
                    <div class="accountbg d-flex align-items-center"> 
                        <div class="account-title text-white text-center">
                            <img src="{{ asset('assets/img/logo.png')}}" alt="" class="thumb-sm">
                            <h4 class="mt-3">Welcome To Justis Call</h4>
                            <div class="border w-25 mx-auto border-primary"></div>
                            <h1 class="">Let's Get Started</h1>
                            <p class="font-14 mt-3">Already have an account ? <a href="{{url('client/login')}}" class="text-primary">Login</a></p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
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