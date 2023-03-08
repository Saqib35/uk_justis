@extends('client.layouts.master')

@section('header_style')
        <title>Change Mobiel || Justiscall</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="Codehub" name="author" />

        <link href="{{asset('admin/assets/plugins/ticker/jquery.jConveyorTicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet"/>
@endsection

@section('main_content')
    
    {{--@include('client.layouts.header')--}}
    <x-client-dashboard-header-component pagename="Change Mobile"/>
    <div class="page-wrapper">
        <div class="page-wrapper-inner">

            <!-- Left Sidenav -->
                {{-- @include('client.includes.sidebar') --}}
                <x-client-dashboard-sidebar-component />
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
                                                <h4 class="mt-0 header-title">EDIT MOBILE</h4>
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
                                                    <form class="form-horizontal form-material mb-0" method="post" action="">
                                                        @csrf
                                                        <div class="row">

                                                            <div class="form-group col-sm-6 col-xs-12">
                                                                <label for="phNum">New Phone Number</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control" id="mobile" placeholder="Enter Phone Number"  maxlength="50" required value="{{old('mobile')}}">
                                                                    @error('mobile')
                                                                        <span class="text-danger">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
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

                                                            <div class="col-md-8 mb-3"></div>
                                                            <div class="col-md-2 mb-3">
                                                                <input type="reset" name="" class="btn-cancel form-control" value="Cancel">
                                                            </div>
                                                            <div class="col-md-2 mb-3">
                                                                <input type="submit" name="" class="btn-submit form-control" value="@if(Session::has('sent_otp') || old('otp')) Update @else Send OTP @endif ">
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
                <x-client-dashboard-footer-component />
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
    <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
    <script src="https://apexcharts.com/samples/assets/series1000.js"></script>
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