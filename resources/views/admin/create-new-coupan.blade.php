@extends('admin.layouts.main')
@section('main-container-admin')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>justiscall - Admin</title>
         <!-- App favicon -->
         <link rel="shortcut icon" href="{{ url('assets/img/logo.png')}}">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by themesbrand" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- Clock css -->
        <link href="admin/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
        <!-- Plugins css -->
        <link href="admin/assets/plugins/timepicker/tempusdominus-bootstrap-4.css" rel="stylesheet" />
        <link href="admin/assets/plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="admin/assets/plugins/clockpicker/jquery-clockpicker.min.css" rel="stylesheet" />
        <link href="admin/assets/plugins/colorpicker/asColorPicker.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />

        <link href="admin/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="admin/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="admin/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" /> 

        

        <!-- App css -->
        <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/style.css" rel="stylesheet" type="text/css" />
        <style id="clock-animations"></style>

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
                                        <h4 class="header-title mt-0">Create New Coupan</h4>
                                        <p class="text-muted mb-4 font-13">
                                            Welcome to JUSTISCALL 
                                        </p>

                                        <div class="row">
                                            <div class="col-md-6 mb-3 ">
                                                <h6 class=" input-title mt-0">Promo Code</h6>
                                                <input type="text" class="form-control" name="defaultconfig" id="defaultconfig" />
                                            </div>
                                            <div class="col-md-6 mb-3 ">
                                                <h6 class=" input-title mt-0">Discount</h6>
                                                <input type="number" class="form-control" name="defaultconfig" id="defaultconfig" />
                                            </div>
                                            <div class="col-md-6 mb-3 ">
                                                <h6 class=" input-title mt-0">expiration Date</h6>
                                                <input type="date" class="form-control" name="defaultconfig" id="defaultconfig" />
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <h6 class="input-title mt-0">Discount Type</h6>
                                                <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                                                        <option disabled selected>Select</option>
                                                        <option value="free">Percentage</option>
                                                        <option value="paid">Amount</option>
                                                    </optgroup>
                                                </select>
                                            </div>


                                            <div class="col-md-8 mb-3"></div>
                                            <div class="col-md-2 mb-3">
                                                <input type="reset" name="" class="btn-cancel form-control" value="Clear">
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <input type="submit" name="" class="btn-submit form-control" value="Submit">
                                            </div>
                                            



                                                                                           
                                        </div>
                                    </div>
                                </div>                                
                            </div> <!-- end col -->
                        </div> <!-- end row --> 

  
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

        <!-- Plugins js -->
        <script src="admin/assets/plugins/moment/moment.js"></script>
        <script src="admin/assets/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="admin/assets/plugins/timepicker/tempusdominus-bootstrap-4.js"></script>
        <script src="admin/assets/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
        <script src="admin/assets/plugins/clockpicker/jquery-clockpicker.min.js"></script>
        <script src="admin/assets/plugins/colorpicker/jquery-asColor.js"></script>
        <script src="admin/assets/plugins/colorpicker/jquery-asGradient.js"></script>
        <script src="admin/assets/plugins/colorpicker/jquery-asColorPicker.min.js"></script>
        <script src="admin/assets/plugins/select2/select2.min.js"></script>

        <script src="admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

        <script src="admin/assets/pages/jquery.clock-img.init.js"></script>
        <script src="admin/assets/pages/jquery.forms-advanced.js"></script>

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