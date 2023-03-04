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
                            <div class="col-lg-12 col-sm-12">
                                <div class="card mb-0 shadow-none">
                                    <div class="card-body">  
                                        <div class="px-3">
                                            <div class="media-body ml-3 align-self-center">   
                                                <h4 class="header-title mt-0">Add Client</h4>
                                                <p class="text-muted mb-4 font-13">
                                                    Welcome to JUSTISCALL 
                                                </p>
                                            </div>                    
                                            
                                            <form class="form-horizontal my-4" action="index.html">
                                                <div class="row">
                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="fName">First Name</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" id="fName" placeholder="Enter First Name" name="fName">
                                                        </div>                                    
                                                    </div>

                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="lName">Last Name</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" id="lName" placeholder="Enter Last Name" name="lName">
                                                        </div>                                    
                                                    </div>

                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="dob">Date of Birth</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar"></i></span>
                                                            </div>
                                                            <input type="date" class="form-control" id="dob" placeholder="Enter Last Name" name="dob">
                                                        </div>                                  
                                                    </div>

                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="category">Gender</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-gender-male-female font-16"></i></span>
                                                            </div>
                                                            <select class="form-control">
                                                                <option selected disabled>Choose Gender</option>
                                                                <option value="1">Male</option>
                                                                <option value="2">Female</option>
                                                            </select>
                                                        </div>                                
                                                    </div>
                                                
                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="phNum">Phone Number</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-lock-outline font-16"></i></span>
                                                            </div>
                                                            <input type="number" class="form-control" id="phNum" placeholder="Enter Phone Number" name="phNum">
                                                        </div>                                
                                                    </div>

                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="eMial">Email Address</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon2"><i class="mdi mdi-email-outline font-16"></i></span>
                                                            </div>
                                                            <input type="email" class="form-control" id="eMial" name="eMial" placeholder="Email Address">
                                                        </div>                                    
                                                    </div>

                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="profile">Upload Profile</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text form-control" id="basic-addon1"><i class="mdi mdi-image font-16"></i></span>
                                                            </div>
                                                            <input type="file" id="file-ip-11" class="form-control" accept="image/*" onchange="showPrevieww(event);">

                                                        </div>                                    
                                                    </div>
                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <div class="preview1">
                                                            <img id="file-ip-11-preview">
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="address">Address</label>
                                                        <div class="input-group mb-3">
                                                            <textarea class="form-control"  id="address" placeholder="Enter Address" name="address" rows="4"></textarea>
                                                        </div>                                    
                                                    </div>
                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="address">Description</label>
                                                        <div class="input-group mb-3">
                                                            <textarea class="form-control"  id="address" placeholder="Enter Description" name="address" rows="4"></textarea>
                                                        </div>                                    
                                                    </div>

                                                    <div class="form-group col-sm-12 col-xs-12">
                                                        <label for="category">Plese Select Lawfirm</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-folder-multiple font-16"></i></span>
                                                            </div>
                                                            <select class="form-control">
                                                                <option selected disabled>Choose Category Type</option>
                                                                <option value="1">Personal</option>
                                                                <option value="2">Firm</option>
                                                            </select>
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
                                                             
                                    </div>
                                </div>
                            </div>
                            
                        </div>

  
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
   .form-input img {
      display:none;
   }
   #file-ip-1-preview, #file-ip-11-preview{
      height: auto;
      width: 60%;
      margin: 5% 0% 0% 20%;
}
.btn-submit, .btn-cancel{
    background-image: linear-gradient(180deg,#2b2b48 0%,#224858 50%);
    color: #fff;
}
</style>
<script type="text/javascript">
   
   function showPrevieww(event){
      if(event.target.files.length > 0){
         var src = URL.createObjectURL(event.target.files[0]);
         var preview = document.getElementById("file-ip-11-preview");
         preview.src = src;
         preview.style.display = "block";
      }
   }

</script>
@endsection