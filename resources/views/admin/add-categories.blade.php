@extends('admin.layouts.master')
@section('header_style')
<title>justiscall - Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description" />
<meta content="" name="author" />


<style>
    .btn-submit, .btn-cancel{
        background-image: linear-gradient(180deg,#2b2b48 0%,#224858 50%);
        color: #fff;
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
                                        <h4 class="header-title mt-0">Add Categories</h4>
                                        <p class="text-muted mb-4 font-13">
                                            Welcome to JUSTISCALL 
                                        </p>
                                        <form action="{{ url('add_category') }}" method="POST">
                                         <div class="row">
                                         <input type="hidden" name="_token" value="{{ csrf_token() }}" /> 
                                            <div class="col-md-6 mb-3 ">
                                                <h6 class=" input-title mt-0">Category name in english</h6>
                                                <input type="text" required="" class="form-control" name="name" id="defaultconfig" />
                                            </div> 
                                            <div class="col-md-6 mb-3 ">
                                                <h6 class=" input-title mt-0">Category name in french</h6>
                                                <input type="text"  required="" class="form-control" name="name_french" id="defaultconfig" />
                                            </div>
                                            
                                            <div class="col-md-6 mb-3 ">
                                                <h6 class=" input-title mt-0">Category name in german</h6>
                                                <input type="text" required="" class="form-control" name="name_german" id="defaultconfig" />
                                            </div>
                                            
                                            <div class="col-md-6 mb-3 ">
                                                <h6 class=" input-title mt-0">Category name in italian</h6>
                                                <input type="text" required="" class="form-control" name="name_italian" id="defaultconfig" />
                                            </div>
                                            
                                            <div class="col-md-6 mb-3 ">
                                                <h6 class=" input-title mt-0">Category name in russain</h6>
                                                <input type="text" required="" class="form-control" name="name_russian" id="defaultconfig" />
                                            </div>
                                            
                                            <div class="col-md-6 mb-3 ">
                                                <h6 class=" input-title mt-0">Category name in spanish</h6>
                                                <input type="text" required="" class="form-control" name="name_spanish" id="defaultconfig" />
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <h6 class="input-title mt-0">Category Type</h6>
                                                <select required="" class="sel form-control mb-3 custom-select" name="category_type" style="width: 100%; height:36px;">
                                                        <option value="" disabled selected>Select</option>
                                                        <option value="Personal">Personal</option>
                                                        <option value="Firm">Firm</option>
                                                    </optgroup>
                                                </select>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <h6 class="input-title mt-0">Status</h6>
                                                <select required="" class=" form-control mb-3 custom-select" name="status" style="width: 100%; height:36px;">
                                                        <option value="" disabled selected>Select</option>
                                                        <option value="1">Enabled</option>
                                                        <option value="0">Disabled</option>
                                                    </optgroup>
                                                </select>
                                            </div>

                                            <div class="col-md-10 mb-3"></div>
                                            
                                            <div class="col-md-2 mb-3">
                                                <input type="submit" name="" class="btn-submit form-control" value="Submit">
                                            </div>                                                    
                                          </div>
                                       </form>
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
       
 @endsection
      
 @section("scriptlinks")
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


@endsection

@section('script_code')
@if(Session::has('status'))

<script>
swal("success", "Added Successfully", "success");
</script>

@endif   

@endsection