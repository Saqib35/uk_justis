@extends('client.layouts.main')
@section('main-container-client')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Justice Call</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by themesbrand" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="admin/assets/images/favicon.ico">

        <link href="admin/assets/plugins/ticker/jquery.jConveyorTicker.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/plugins/dropify/css/dropify.min.css" rel="stylesheet">


        <!-- App css -->
        <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

    @include('client.layouts.header')
        
        <div class="page-wrapper">
            <div class="page-wrapper-inner">

                <!-- Left Sidenav -->
                  @include('client.includes.sidebar')
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
                                                    <h4 class="mt-0 header-title">Professional's Profile</h4>
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
                                                        <h4 class="mt-0 header-title">About Professionals</h4>
                                                    </div>
                                                    
                                                    <div class="col-lg-12">
                                                        <div class="row border rounded pt-3 pb-5">
                                                            <div class="col-sm-3 col-xs-12 mt-3">
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
                                                                    <label><i class="mdi mdi-star"></i> (5/5)</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <label>
                                                                        <i class="mdi mdi-map-marker"></i>
                                                                        109 Bd Carnot, 06400 Cannes, France
                                                                        Postal Code: 06400
                                                                    </label>
                                                                </div>
                                                                <div class="col-sm-12 mt-4">
                                                                    <button class="btn-cancel form-control py-1">
                                                                        Add to favourite
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-2 col-xs-12 mt-3"></div>
                                                            <div class="col-sm-3 col-xs-12 mt-3">
                                                                <div class="col-sm-12">
                                                                    <h4>Payment Accepted</h4>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <b><label></label></b>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <label>Cash, Credit Card, Check, Wire Transfert,</label>
                                                                </div>
                                                                <div class="col-sm-12 mt-4">
                                                                    <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn-cancel form-control py-1 text-white">
                                                                        Book Appointment
                                                                    </button>
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




                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Booking</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group col-sm-12 col-xs-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar"></i></span>
                                                        </div>
                                                        <input type="date" class="form-control" id="date" name="date">
                                                    </div>                                  
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group col-sm-12 col-xs-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-clock font-16"></i></span>
                                                        </div>
                                                        <input type="time" class="form-control" id="time" name="time">
                                                    </div>                                  
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body profile-nav"> 
                                        <div class="nav flex-column nav-pills" id="profile-tab" aria-orientation="vertical">
                                            <a class="nav-link active" id="profile-dash-tab" data-toggle="pill" href="#profile-dash" aria-selected="true">Overview</a>
                                            <a class="nav-link" id="profile-activities-tab" data-toggle="pill" href="#profile-activities" aria-selected="false">Location</a>
                                            <a class="nav-link" id="profile-activities-tab" data-toggle="pill" href="#profile-setting" aria-selected="false">Reviews</a>
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

                                                <h4 class="header-title mt-1">Services</h4>
                                                <p>
                                                    <ul>
                                                        <li>Service 1</li>
                                                        <li>Service 2</li>
                                                        <li>Service 3</li>
                                                    </ul>
                                                </p>
                                                <h4 class="header-title mt-1">Specializations</h4>
                                                <p>
                                                    <ul>
                                                        <li>Lawyer</li>
                                                    </ul>
                                                </p>
                                                <h4 class="header-title mt-1">Country</h4>
                                                <p>
                                                    <ul>
                                                        <li>Country Name</li>
                                                    </ul>
                                                </p>
                                            </div><!--end tab-pane-->

                                            <div class="tab-pane fade" id="profile-activities">
                                                <h4 class="header-title mt-0 mb-4">Location</h4>
                                                <div class="col-sm-6 col-xs-12 mt-3">

                                                    <div class="col-sm-12">
                                                        <h4>Name</h4>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <b><label>Lawyer</label></b>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label><i class="mdi mdi-star"></i> (5/5)</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label>
                                                            <i class="mdi mdi-map-marker"></i>
                                                            109 Bd Carnot, 06400 Cannes, France
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label>
                                                            Postal Code: 06400
                                                        </label>
                                                    </div>
                                                </div>
                                            </div><!--end tab-pane-->

                                            <div class="tab-pane fade" id="profile-setting">
                                                <h4 class="header-title mt-0 mb-4 text-center">Show All Feedback (0)</h4>

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

        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>

    </body>
</html>

<style>
    .btn-submit, .btn-cancel{
        background-image: linear-gradient(180deg,#2b2b48 0%,#224858 50%);
        color: #fff;
    }
</style>
@endsection