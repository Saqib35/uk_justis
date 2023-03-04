@extends('pro.layouts.master')
@section('main_content')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Justice Call</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by mannatthemes" name="description" />
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
                                                    <h4 class="mt-0 header-title">Feedback</h4>
                                                    <p class="text-muted mb-4 font-13">Welcome to JUSTISCALL</p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end f_profile-->             
                                    </div><!--end card-body-->                                    
                                </div><!--end card-->
                            </div><!--end col-->
                        </div>
                        

                        <div class="">
                            <div class="col-lg-12 px-0">
                                <div class="card">
                                    <div class="card-body profile-nav"> 
                                        <div class="nav nav-pills" id="profile-tab" aria-orientation="">
                                            <a class="nav-link active text-center" id="profile-dash-tab" data-toggle="pill" href="#profile-dash" aria-selected="true">
                                                0<br>
                                                Experiences
                                            </a>
                                            <a class="nav-link text-center" id="profile-dash-tab" data-toggle="pill" href="#profile-dash" aria-selected="true">
                                                0<br>
                                                Positives
                                            </a>

                                            <a class="nav-link text-center" id="profile-dash-tab" data-toggle="pill" href="#profile-dash" aria-selected="true">
                                                0<br>
                                                Negatives
                                            </a>

                                            
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div>
                    </div><!-- container -->

                    

                    <footer class="footer text-center text-sm-left">
                        &copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                    </footer>
                </div>
                <!-- end page content -->
            </div>
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
<style>
    #profile-tab a{
        width: 20%;
        font-size: 20px;
    }
    #profile-tab{
        padding-left: 20%;
    }
    .profile-nav .nav .nav-link.active {
        color: #fff !important;
        font-weight: bold;
        background-color: #224858;
    }

    @media screen and (min-width: 500px) and (max-width: 910px) {
        #profile-tab a {
            width: 30% !important;
            font-size: 20px;
            display: table;
        }

        #profile-tab{
            padding-left: 5%;
        }
    }
    @media screen and (min-width: 320px) and (max-width: 499px) {
        #profile-tab a {
            width: 100% !important;
            font-size: 20px;
            display: table;
        }

        #profile-tab{
            padding-left: 0%;
        }
    }


    
</style>
@endsection