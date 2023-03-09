@extends('client.layouts.master')

@section('header_style')
        <title>Justice Call</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="CodeHUB" name="author" />

        <link href="{{asset('admin/assets/plugins/ticker/jquery.jConveyorTicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
@endsection


@section('main_content')
        {{-- @include('client.layouts.header')--}}  
        <x-client-dashboard-header-component pagename="Result Professional Search"/>
        
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
                                                    <h4 class="mt-0 header-title">Search Professionals</h4>
                                                    <p class="text-muted mb-4 font-13">Welcome to JUSTISCALL</p>
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
                                                        <h4 class="mt-0 header-title">Search Filter</h4>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <form class="form-horizontal form-material mb-0">
                                                           
                                                            <div class="row">

                                                                <div class="form-group col-sm-6 col-xs-12">
                                                                    <h6>Date</h6>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-folder-multiple font-16"></i></span>
                                                                        </div>
                                                                        <input type="Date" name="" class="form-control">
                                                                    </div>                                
                                                                </div>
                                                                <div class="form-group col-sm-6 col-xs-12">
                                                                    <h6>Gender</h6>
                                                                    <div class="row">  
                                                                        <div class="col-sm-4 col-xs-12">
                                                                            <input type="checkbox" name="" class="form-contol" value="">
                                                                            <label>Male Firm</label>
                                                                        </div>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            <input type="checkbox" name="" class="form-contrl" value="">
                                                                            <label>Available Comming weekend</label><br>
                                                                        </div>
                                                                    </div>                                                                    
                                                                </div>
                                                                <div class="form-group col-lg-12 col-xs-12">
                                                                    <h6>Availability</h6>
                                                                    <div class="row">
                                                                        <div class="col-sm-2 col-xs-12">
                                                                            <input type="radio" name="" class="form-contrl" value="">
                                                                            <label>Availability</label>        
                                                                        </div>
                                                                        <div class="col-sm-3 col-xs-12">
                                                                            <input type="radio" name="" class="form-contol" value="">
                                                                            <label>Available Anyday</label>
                                                                        </div>
                                                                        <div class="col-sm-3 col-xs-12">
                                                                            <input type="radio" name="" class="form-contol" value="">
                                                                            <label>Available Today</label>
                                                                        </div>
                                                                        <div class="col-sm-4 col-xs-12">
                                                                            <input type="radio" name="" class="form-contol" value="">
                                                                            <label>Available in Next 30 Days</label>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                <div class="col-lg-12 col-xs-12 mb-3">
                                                                    <div class="row">
                                                                        <div class="col-sm-9"></div>
                                                                        <div class="col-sm-3 col-xs-12">
                                                                            <input type="button" name="" class="btn-cancel form-control" value="Search">
                                                                        </div>
                                                                    </div>
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

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="profile-tabContent">
                                            <div class="tab-pane fade  show active" id="profile-settings">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h4 class="mt-0 header-title">All Professionals</h4>
                                                    </div>
                                                    
                                                    <div class="col-lg-12">
                                                        <div class="row border rounded">
                                                            <div class="col-sm-4 col-xs-12 mt-3">
                                                                <div class="profile-image-div">
                                                                    <img src="admin/assets/images/users/user-1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12 mt-3">
                                                                <div class="col-sm-12">
                                                                    <h4>Name</h4>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <b><label>Lawyer</label></b>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <label>5 Years Experiance</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <label><i class="mdi mdi-star"></i> (5/5)</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12 mt-3">
                                                                <div class="col-sm-12 col-xs-6">
                                                                    <label>
                                                                        <i class="mdi mdi-thumb-up-outline"></i>
                                                                        72% (0 votes)
                                                                    </label>
                                                                </div>
                                                                <div class="col-sm-12 col-xs-6">
                                                                    <label>
                                                                        <i class="mdi mdi-message-text-outline"></i>
                                                                        0 Feedback
                                                                    </label>
                                                                </div>
                                                                <div class="col-sm-12 col-xs-12">
                                                                    <label>
                                                                        <i class="mdi mdi-map-marker"></i>
                                                                        109 Bd Carnot, 06400 Cannes, France
                                                                        Postal Code: 06400
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 mt-3 bg-light py-3 my-2">
                                                                <div class="row">
                                                                    <div class="col-sm-3 col-xs-12">
                                                                        <button class="btn-cancel form-control">
                                                                            View Profile
                                                                        </button>
                                                                    </div>
                                                                    <div class="col-sm-6 col-xs-12"></div>
                                                                    <div class="col-sm-3 col-xs-12">
                                                                        <button class="btn-cancel form-control">
                                                                            Book Appointment
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!--end col-->                                          
                                            </div><!--end row-->
                                        </div><!--end tab-pane-->
                                    </div>  <!--end tab-content-->                                                                              
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                         <div class="row mt-5 pt-4">
                            <div class="col-lg-12">
                                <div class="card">
                                        <footer class="footer text-center text-sm-left">
                                            &copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                                        </footer>
                                        
                                                                                                             
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->




                    </div><!--end row-->
                </div><!-- container -->

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

@endsection

@section('script_code')
@endsection