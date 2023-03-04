@extends('client.layouts.main')
@section('main_content')
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
                                                    <h4 class="mt-0 header-title">EDIT PASSWORD</h4>
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
                                                        <form class="form-horizontal form-material mb-0">
                                                           
                                                            <div class="row">
                                                                <div class="form-group col-sm-6 col-xs-12">
                                                                    <label for="fName">Old Password</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-lock-outline font-16"></i></span>
                                                                        </div>
                                                                        <input type="password" class="form-control" id="fName" placeholder="Enter First Name" name="fName">
                                                                    </div>                                    
                                                                </div>
                                                                <div class="form-group col-sm-6 col-xs-12">
                                                                    <label for="fName">New Password</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-lock-outline font-16"></i></span>
                                                                        </div>
                                                                        <input type="password" class="form-control" id="fName" placeholder="Enter First Name" name="fName">
                                                                    </div>                                    
                                                                </div>
                                                                <div class="form-group col-sm-6 col-xs-12">
                                                                    <label for="fName">Confirm Password</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-lock-outline font-16"></i></span>
                                                                        </div>
                                                                        <input type="password" class="form-control" id="fName" placeholder="Enter First Name" name="fName">
                                                                    </div>                                    
                                                                </div>



                                                                
                                                                
                                                                <div class="col-md-8 mb-3"></div>
                                                                <div class="col-md-2 mb-3">
                                                                    <input type="reset" name="" class="btn-cancel form-control" value="Cancel">
                                                                </div>
                                                                <div class="col-md-2 mb-3">
                                                                    <input type="submit" name="" class="btn-submit form-control" value="Add">
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
                </div><!-- container -->

                    <footer class="footer text-center text-sm-left">
                        &copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                    </footer>
                </div>
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