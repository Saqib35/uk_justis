@extends('pro.layouts.master')
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

        <!-- App css -->
        <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

                        
    @include('pro.layouts.header')
        <div class="page-wrapper">
            <div class="page-wrapper-inner">

             <!-- Left Sidenav -->
             @include('pro.includes.sidebar')
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
                                                    <h4 class="mt-0 header-title">Subscription</h4>
                                                    <p class="text-muted mb-4 font-13">Welcome to JUSTISCALL</p>
                                                    <div class="row" style="display: none;">
                                                        <div class="col-5 align-item-center">
                                                            <canvas id="pro-doughnut" height="0" style="display: block; width: 0px; height: 0px;" class="chartjs-render-monitor" width="0"></canvas> 
                                                        </div>
                                                    </div> 
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end f_profile-->             
                                    </div><!--end card-body-->                                    
                                </div><!--end card-->
                            </div><!--end col-->
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body invoice-head"> 
                                        <div class="row">
                                            <h4 class="mt-0 header-title">Justiscall PRO</h4>
                                        </div> 
                                    </div><!--end card-body-->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="">
                                                    <h6 class="mb-0">
                                                        <b>Validity From :</b> 
                                                        <label> 2022-12-13 11:19:07</label>
                                                    </h6>
                                                    <h6>
                                                        <b>Validity To :</b>
                                                        <label> 2023-01-13</label>
                                                    </h6>
                                                </div>
                                            </div>
                                      
                                        </div>

                                    </div>
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

        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>

    </body>
</html>
@endsection