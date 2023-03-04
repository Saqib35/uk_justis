@extends('admin.layouts.master')
@section('header_style')
<title>justiscall - Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description" />
<meta content="" name="author" />
     

<style>
    .fro_profile_user-detail{
        margin-left: 30px;
    }
    .id-card-img{
        height: 150px;
        width: 100%;
    }
    .id-card-img img{
        height: 100%;
        width: 100%;
    }
</style>

@endsection


@section('main_content')

    @include('admin.layouts.header')
        
        <div class="page-wrapper">
            <div class="page-wrapper-inner">

                <!-- Left Sidenav -->
                  @include('admin.includes.sidebar')
                <!-- end left-sidenav-->


                <!-- Page Content-->
                <div class="page-content">
                    <div class="container-fluid"> 
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body bootstrap-select-1">
                                        <h4 class="header-title mt-0">View Profile</h4>
                                        <p class="text-muted mb-4 font-13">
                                            Welcome to JUSTISCALL 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body border-bottom">
                                        <div class="fro_profile">
                                            <div class="row">
                                                <div class="col-lg-3 col-xs-12 mb-3 mb-lg-0">
                                                    <div class="fro_profile-main">
                                                        <div class="fro_profile-main-pic">
                                                            <img src="admin/assets/images/users/user-4.jpg" alt="" class="rounded-circle">
                                                            <span class="fro-profile_main-pic-change">
                                                                <i class="fas fa-camera"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->

                                                <div class="col-lg-3 col-xs-12 mb-3 mb-lg-0">
                                                    <div class="fro_profile_user-detail">
                                                        <h5 class="fro_user-name">Name</h5>
                                                        <p class="mb-0 fro_user-name-post">Lawyer</p>
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-lg-3 col-xs-12 mb-3 mb-lg-0">
                                                     <div class="fro_profile_user-detail">
                                                        <h5 class="fro_user-name">Wallet Balance</h5>
                                                        <p class="mb-0 fro_user-name-post">$1234</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-xs-12 mb-3 mb-lg-0">
                                                    <div class="fro_profile_user-detail">
                                                        <h5 class="fro_user-name">ID Card Number</h5>
                                                        <p class="mb-0 fro_user-name-post">36502-9876543-2</p>
                                                    </div> 
                                                </div>
                                                
                                            </div><!--end row-->
                                        </div><!--end f_profile-->                                                                                
                                    </div><!--end card-body-->

                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="id-card-img">
                                        <img src="" alt="">
                                    </div>
                                </div><!--end card-->

                                <div class="card">
                                    <div class="card-body profile-nav"> 
                                        <div class="nav flex-column nav-pills" id="profile-tab" aria-orientation="vertical">
                                            <a class="nav-link active" id="profile-dash-tab" data-toggle="pill" href="#profile-dash" aria-selected="true">Overview</a>
                                            <a class="nav-link" id="profile-activities-tab" data-toggle="pill" href="#profile-activities" aria-selected="false">Reviews</a>
                                            <a class="nav-link d-flex justify-content-between align-items-center" id="profile-pro-stock-tab" data-toggle="pill" href="#profile-pro-stock" aria-selected="false">Availability</a>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->

                            </div><!--end col-->

                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="profile-tabContent">
                                            <div class="tab-pane fade show active" id="profile-dash">
                                                <h4 class="header-title mt-0 mb-4">Overview</h4>
                                                <h4 class="header-title mt-0">Profile Description</h4>
                                                <p>No Profile Description</p>
                                                <h4 class="header-title mt-1">Profile Description</h4>
                                                <p>No Profile Description</p>
                                                <h4 class="header-title mt-1">Specializations</h4>
                                                <p>Lawyer</p>
                                                <h4 class="header-title mt-1">Location</h4>
                                                <p>Pakistan (PK)<br>Pakistan</p>
                                            </div><!--end tab-pane-->

                                            <div class="tab-pane fade" id="profile-activities">
                                                <h4 class="mt-0 header-title mb-3">Reviews</h4>
                                            </div><!--end tab-pane-->

                                            <div class="tab-pane fade" id="profile-pro-stock">
                                                <h4 class="header-title mt-0">Todays Availability :-</h4>
                                                <span class="border mx-2 p-2 rounded">CLOSED NOW</span>
                                                <h4 class="header-title mt-3">Pro Availability :-</h4>
                                                <p>
                                                    <b>Wednesday</b><br>
                                                    09:00 AM - 18:00 PM <br>
                                                    <b>Monday</b><br>
                                                    09:00 AM - 18:00 PM <br>
                                                    <b>Tuesday</b><br>
                                                    09:00 AM - 18:00 PM
                                                </p>
                                               





                                                
                                            </div><!--end tab-pen-->

                                        </div>  <!--end tab-content-->                                                                              
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!-- container -->

                    <footer class="footer text-center text-sm-left">
                        &copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                    </footer>
                </div>
                <!-- end page content -->
            </div>
            <!--end page-wrapper-inner -->
        </div>
@endsection


@section("scriptlinks")

        <!-- jQuery  -->
        <script src="admin/assets/js/jquery.min.js"></script>
        <script src="admin/assets/js/bootstrap.bundle.min.js"></script>
        <script src="admin/assets/js/metisMenu.min.js"></script>
        <script src="admin/assets/js/waves.min.js"></script>
        <script src="admin/assets/js/jquery.slimscroll.min.js"></script>

        <script src="admin/assets/plugins/moment/moment.js"></script>
        <script src="admin/assets/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
        <script src="https://apexcharts.com/samples/assets/series1000.js"></script>
        <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
        <script src="admin/assets/plugins/dropify/js/dropify.min.js"></script>
        <script src="admin/assets/plugins/ticker/jquery.jConveyorTicker.min.js"></script>
        <script src="admin/assets/plugins/peity-chart/jquery.peity.min.js"></script>
        <script src="admin/assets/plugins/chartjs/chart.min.js"></script>
        <script src="admin/assets/pages/jquery.profile.init.js"></script>


@endsection

@section('script_code')

@endsection