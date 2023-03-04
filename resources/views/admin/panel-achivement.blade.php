@extends('admin.layouts.main')
@section('main-container-admin')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Justice Call</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by themesbrand" name="description" />
        <meta content="Mannatthemes" name="author" />

        <link rel="shortcut icon" href="{{ url('assets/img/logo.png')}}">


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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </head>

    <body>

                         
    @include('admin.layouts.header')
    
    
    
    @if(Session::has('status'))

<script>
swal("success", "Updated", "success");
</script>

@endif   
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
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Justice Call</h4>  
                                        <P class="mt-0 text-muted mb-4">Welcome to admin Panel</P> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form action="{{ url('admin-achivement_update') }}" method="post" enctype="multipart/form-data">
                                                <div class="card">
                                                    <div class="card-body"> 
                                                   <input type="hidden" name="_token" value="{{ csrf_token() }}" />   
                                                        <h4 class="mt-0 header-title mb-3">Achivement</h4>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    
                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">Achivement Title</h6>
                                                                        <input type="text" name="title" value="{{ $home_achievement[0]->title }}" class="form-control" id="thresholdconfig" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">Achivement Details</h6>
                                                                        <input type="text" name="detail" value="{{ $home_achievement[0]->detail }}" class="form-control" id="thresholdconfig" />
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">First Achivement Name</h6>
                                                                        <input type="text" name="complete_case" value="{{ $home_achievement[0]->complete_case }}" class="form-control" id="thresholdconfig" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">First Achivement Value</h6>
                                                                        <input type="text" name="complete_case_number"  value="{{ $home_achievement[0]->complete_case_number }}" class="form-control" id="thresholdconfig" />
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">Second Achivement Name</h6>
                                                                        <input type="text" name="expart_attorney"  value="{{ $home_achievement[0]->expart_attorney }}" class="form-control" id="thresholdconfig" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">Second Achivement Value</h6>
                                                                        <input type="text" name="expart_attorney_number"  value="{{ $home_achievement[0]->expart_attorney_number }}"  class="form-control" id="thresholdconfig" />
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">Third Achivement Name</h6>
                                                                        <input type="text" name="happy_clients"  value="{{ $home_achievement[0]->happy_clients }}" class="form-control" id="thresholdconfig" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">Third Achivement Value</h6>
                                                                        <input type="text" name="happy_clients_number"  value="{{ $home_achievement[0]->happy_clients_number }}" class="form-control" id="thresholdconfig" />
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">Forth Achivement Name</h6>
                                                                        <input type="text" name="win_awards"  value="{{ $home_achievement[0]->win_awards }}" class="form-control" id="thresholdconfig" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">Forth Achivement Value</h6>
                                                                        <input type="text" name="win_awards_number"  value="{{ $home_achievement[0]->win_awards_number }}" class="form-control" id="thresholdconfig" />
                                                                    </div>
                                                                   <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">Achivement Image</h6>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <input type="file" id="file-ip-1" class="form-control" accept="image/*" onchange="showPreview(event);" name="logo" >
                                                                        </div>         
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="preview">
                                                                            <img id="file-ip-1-preview">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-10 col-xs-12"></div>
                                                                    
                                                                    <div class="col-sm-2 col-xs-12">
                                                                        <button class="btn-submit form-control">
                                                                            Update
                                                                        </button>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>                                        
                                            </div> <!-- end col -->
                                        </div> <!-- end row --> 
                                         
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
    .form-input img {
        display:none;
    }
    #file-ip-1-preview, #file-ip-11-preview{
        height: auto;
        width: 100%;
    }
    .days{
        margin-bottom: 20px;
    }
    .form-control[readonly] {
        background-color: transparent !important;
    }
    .btn-submit {
        background-image: linear-gradient(180deg,#2b2b48 0%,#224858 50%);
        color: #fff;
    }
    @media  screen and (min-width: 320px) and (max-width: 1199px) {
        .days b{
            display: block !important;
        }
    }

    @media  screen and (min-width: 320px) and (max-width: 424px) {
        .days input{
            width: 80px;
        }
    }
    @media  screen and (min-width: 320px) and (max-width: 374px) {
        .wed{
            padding: 0px 0px;
        }
    }
</style>


<script type="text/javascript">
    function showPreview(event){
      if(event.target.files.length > 0){
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("file-ip-1-preview");
        preview.src = src;
        preview.style.display = "block";
      }
    }
</script>
@endsection