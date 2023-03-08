@extends('client.layouts.master')

@section('header_style')
<meta charset="utf-8" />
<title>Profile Client || JUSTISCALL</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description" />
<meta content="Codehub" name="author" />
<link href="{{asset('admin/assets/plugins/ticker/jquery.jConveyorTicker.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin/assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet"/>

@endsection



@section('main_content')
        <x-client-dashboard-header-component pagename="Profile"/>
        <div class="page-wrapper">
            <div class="page-wrapper-inner">

                <!-- Left Sidenav -->
                <x-client-dashboard-sidebar-component/>
                <!-- end left-sidenav-->


                <!-- Page Content-->
                <div class="page-content">
                    <div class="container-fluid"> 
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body border-bottom">
                                        <div class="fro_profile">
                                            <div class="row">
                                                <div class="col-lg-4 mb-3 mb-lg-0">
                                                    <h4 class="mt-0 header-title">EDIT PROFILE</h4>
                                                    <p class="text-muted mb-4 font-13">Welcome to JUSTISCALL</p>
                                                    <div class="row" style="display: none;">
                                                        <div class="col-5 align-item-center">
                                                            <canvas id="pro-doughnut" height="180"></canvas> 
                                                        </div>
                                                    </div> 
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end f_profile-->             
                                    </div><!--end card-body-->                                    
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="profile-tabContent">
                                            <div class="tab-pane fade  show active" id="profile-settings">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <form class="form-horizontal form-material mb-0" action="" method="post">
                                                            @csrf
                                                            <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="{{asset(auth()->user()->profile_img)}}"/>
                                                           
                                                            <div class="row">
                                                                <div class="form-group col-sm-6 col-xs-12">
                                                                    <label for="fName">First Name</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                                                        </div>
                                                                        <input type="text" class="form-control" id="fName" placeholder="Enter First Name" name="first_name" maxlength="255" required value="{{auth()->user()->first_name}}">
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
                                                                        <input type="text" class="form-control" id="lName" placeholder="Enter Last Name" name="last_name" maxlength="255" required value="{{auth()->user()->last_name}}">
                                                                        @error('last_name')
                                                                            <span class="text-danger">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>                                    
                                                                </div>

                                                                <div class="form-group col-sm-6 col-xs-12">
                                                                    <label for="date_of_birth">Date of Birth</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar"></i></span>
                                                                        </div>
                                                                        <input type="date" class="form-control" id="date_of_birth" placeholder="Enter Last Name" name="date_of_birth" value="{{auth()->user()->date_of_birth}}">
                                                                        @error('date_of_birth')
                                                                            <span class="text-danger">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>                                  
                                                                </div>

                                                                <div class="form-group col-sm-6 col-xs-12">
                                                                    <label for="category">Family Situation</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-home-automation font-16"></i></span>
                                                                        </div>
                                                                        <select class="form-control">
                                                                            <option selected="" disabled="">Choose</option>
                                                                            <option value="1">Single</option>
                                                                            <option value="2">Married</option>
                                                                            <option value="3">Divorced</option>
                                                                            <option value="4">Other</option>
                                                                        </select>
                                                                    </div>                                
                                                                </div>

                                                                <div class="form-group col-sm-6 col-xs-12">
                                                                    <label for="eMial">Email Address</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon2"><i class="mdi mdi-email-outline font-16"></i></span>
                                                                        </div>
                                                                        <input type="email" class="form-control" id="eMial" name="email" placeholder="Email Address" maxlength="255" required value="{{auth()->user()->email}}">
                                                                        @error('email')
                                                                            <span class="text-danger">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>                                    
                                                                </div>
                                                            
                                                                

                                                                <div class="form-group col-sm-6 col-xs-12">
                                                                    <label for="phNum">Address</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-lock-outline font-16"></i></span>
                                                                        </div>
                                                                        <input type="text" class="form-control" id="google-map-address" placeholder="Enter Address" name="address" size="50" value="{{auth()->user()->address}}">
                                                                        @error('address')
                                                                            <span class="text-danger">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>                                
                                                                </div>

                                                                <div class="form-group col-sm-6 col-xs-12">
                                                                    <label for="phNum">Zip Code</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-lock-outline font-16"></i></span>
                                                                        </div>
                                                                       <input type="text" class="form-control" id="pCode" placeholder="Enter Postal Code" name="post_code" maxlength="50" value="{{auth()->user()->post_code}}">
                                                                        @error('post_code')
                                                                            <span class="text-danger">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>                                
                                                                </div>

                                                                <div class="form-group col-sm-6 col-xs-12">
                                                                    <label for="category">Select Country</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-folder-multiple font-16"></i></span>
                                                                        </div>
                                                                        <select class="form-control" name="country" required>
                                                                            <option  selected disabled>Choose Country</option>
                                                                           @foreach($countries as $country)
                                                                            <option value="{{$country->sortname}}" @if(auth()->user()->country==$country->sortname) selected @endif>{{$country->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        @error('country')
                                                                            <span class="text-danger">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>                                
                                                                </div>

                                                                <div class="form-group col-sm-6 col-xs-12">
                                                                    <label for="phNum">City</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-lock-outline font-16"></i></span>
                                                                        </div>
                                                                        <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" value="{{auth()->user()->city}}">
                                                                        @error('city')
                                                                            <span class="text-danger">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>                                
                                                                </div>
                                                                
                                                                <div class="col-md-8 mb-3"></div>
                                                                <div class="col-md-2 mb-3">
                                                                    <a href="{{ route('client-profile-setting') }}" name="" class="btn btn-cancel form-control">Cancel</a>
                                                                </div>
                                                                <div class="col-md-2 mb-3">
                                                                    <input type="submit" name="" class="btn-submit form-control" value="Save Changes">
                                                                </div>                          
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div> <!--end col-->                                          
                                            </div><!--end row-->
                                        </div><!--end tab-pane-->
                                    </div>  <!--end tab-content-->                                                                              
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                     <x-client-dashboard-footer-component/>
                </div><!-- container -->

                    
                </div>
                <!-- end page content -->
            </div>
            <!--end page-wrapper-inner -->
        </div>
        <!-- end page-wrapper -->
@endsection





@section('scriptlinks')
        <script src="{{asset('admin/assets/plugins/moment/moment.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('https://apexcharts.com/samples/assets/irregular-data-series.js')}}"></script>
        <script src="{{asset('https://apexcharts.com/samples/assets/series1000.js')}}"></script>
        <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
        <script src="{{asset('admin/assets/plugins/dropify/js/dropify.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/ticker/jquery.jConveyorTicker.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/peity-chart/jquery.peity.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/chartjs/chart.min.js')}}"></script>
        <script src="{{asset('admin/assets/pages/jquery.profile.init.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
        
@endsection



@section('script_code')
 <script>
    var phone_number = window.intlTelInput(document.querySelector("#mobile"), {
    separateDialCode: true,
    preferredCountries:["FR"],
    hiddenInput: "mobile",
    
    utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
    });

</script>
@endsection