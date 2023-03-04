@extends('admin.layouts.main')
@section('main-container-admin')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Justis Call</title>
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
    swal("success", "Added Successfully", "success");
    </script>
    
    @endif   
    
    
    @if(Session::has('Del'))
    
    <script>
    swal("success", "Deleted Successfully", "success");
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
                                                
                                        <form method="post" action="{{ url('admin-slider_update') }}"  enctype="multipart/form-data">
                                          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                         <label>Slider Title</label>   
                                         <input type="text" required="" name="title" class="form-control">
                                         <label>Slider Description</label>   
                                         <input type="text" name="description"  required="" class="form-control">
                                         <label>Slider Img</label>   
                                         <input type="file" name="logo"  required="" class="form-control">
                                         <div class="row">
                                            <div class="col-sm-9 col-xs-12"></div>                  
                                            <div class="col-sm-3 col-xs-12 mt-4">
                                                <button class="btn-submit form-control" type="submit">
                                                    Add Slider
                                                </button>
                                            </div>
                                        </div>    
                                    </form> 
                                              
                                    </div><!--end card-body-->
                                </div>
                            </div><!--end col-->
                          <div class="col-lg-12">

                                 <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">All FAQS</h4>
                                        
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>SR NO</th>
                                                <th>Slider Title</th>
                                                <th>Slider Description</th>
                                                <th>Slider Image</th>
                                                <th>ACTION</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $a=1
                                                @endphp
                                               
                                                @foreach ($Sliders as $Sliders)
                                                <tr>
                                                    <td>{{ $a++  }}</td>
                                                    <td>{{ $Sliders['title']  }}</td>
                                                    <td>{{ $Sliders['description']  }}</td>
                                                    <td>
                                                     <img src="{{ $Sliders['img']  }}" width="130px" height="130px">
                                                    </td>
                                                    <td class="action">
                                                        <a href="admin-slider-del/{{ $Sliders['id'] }}" class="ml-2"><i class="mdi mdi-delete"></i> </a>
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>        
                                    </div>
                                </div>
                           </div>
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