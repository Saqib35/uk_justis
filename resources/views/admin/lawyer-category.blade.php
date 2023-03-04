@extends('admin.layouts.main')
@section('main-container-admin')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
       <!-- App favicon -->
       <link rel="shortcut icon" href="{{ url('assets/img/logo.png')}}">

         
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App css -->
        <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        
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
                                        <h4 class="header-title mt-0">Lawyer</h4>
                                        <p class="text-muted mb-4 font-13">
                                            Welcome to JUSTISCALL 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card  profile-card">
                                    <img src="admin/assets/images/widgets/profile-1.jpg" alt="" class="img-fluid">                                       
                                    <div class="card-body pb-0">
                                        <div class="text-center pb-3">
                                            <h5>Name</h5>
                                            <p class="mb-2 font-12 text-muted"></i>Lawyer</p>
                                            <p class="mb-2 font-12 text-muted"></i>Male</p>
                                            <a class="btn btn-sm btn-success text-light mt-3">View Profile</a>
                                            <a class="btn btn-sm btn-info text-light mt-3">Edit Profile</a><br>
                                            <a class="btn btn-sm btn-primary text-light mt-3">Add Wallet</a>
                                            <a class="btn btn-sm btn-danger text-light mt-3">Delete</a>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->

                            <div class="col-lg-3">
                                <div class="card  profile-card">
                                    <img src="admin/assets/images/widgets/profile-1.jpg" alt="" class="img-fluid">                                       
                                    <div class="card-body pb-0">
                                        <div class="text-center pb-3">
                                            <h5>Name</h5>
                                            <p class="mb-2 font-12 text-muted"></i>Lawyer</p>
                                            <p class="mb-2 font-12 text-muted"></i>Male</p>
                                            <a class="btn btn-sm btn-success text-light mt-3">View Profile</a>
                                            <a class="btn btn-sm btn-info text-light mt-3">Edit Profile</a><br>
                                            <a class="btn btn-sm btn-primary text-light mt-3">Add Wallet</a>
                                            <a class="btn btn-sm btn-danger text-light mt-3">Delete</a>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->

                            <div class="col-lg-3">
                                <div class="card  profile-card">
                                    <img src="admin/assets/images/widgets/profile-1.jpg" alt="" class="img-fluid">                                       
                                    <div class="card-body pb-0">
                                        <div class="text-center pb-3">
                                            <h5>Name</h5>
                                            <p class="mb-2 font-12 text-muted"></i>Lawyer</p>
                                            <p class="mb-2 font-12 text-muted"></i>Male</p>
                                            <a class="btn btn-sm btn-success text-light mt-3">View Profile</a>
                                            <a class="btn btn-sm btn-info text-light mt-3">Edit Profile</a><br>
                                            <a class="btn btn-sm btn-primary text-light mt-3">Add Wallet</a>
                                            <a class="btn btn-sm btn-danger text-light mt-3">Delete</a>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->

                            <div class="col-lg-3">
                                <div class="card  profile-card">
                                    <img src="admin/assets/images/widgets/profile-1.jpg" alt="" class="img-fluid">                                       
                                    <div class="card-body pb-0">
                                        <div class="text-center pb-3">
                                            <h5>Name</h5>
                                            <p class="mb-2 font-12 text-muted"></i>Lawyer</p>
                                            <p class="mb-2 font-12 text-muted"></i>Male</p>
                                            <a class="btn btn-sm btn-success text-light mt-3">View Profile</a>
                                            <a class="btn btn-sm btn-info text-light mt-3">Edit Profile</a><br>
                                            <a class="btn btn-sm btn-primary text-light mt-3">Add Wallet</a>
                                            <a class="btn btn-sm btn-danger text-light mt-3">Delete</a>
                                        </div>
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

        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>

    </body>
</html>
@endsection