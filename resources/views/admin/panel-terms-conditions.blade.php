@extends('admin.layouts.main')
@section('main-container-admin')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Justice Call Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by themesbrand" name="description" />
        <meta content="Mannatthemes" name="author" />

     

        <!-- App css -->
        <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/style.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="{{ url('assets/img/logo.png')}}">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">            
                                        <h4 class="mt-0 header-title">Justice Call</h4>
                                        <p class="text-muted mb-4">Welcome to admin Panel</p>        
                                    </div>
                                </div>
                            </div>
                        </div>
 @if(Session::has('status'))

<script>
swal("success", "Updated", "success");
</script>

@endif                       
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">            
                                        <h4 class="mt-0 header-title">Terms And Conditions</h4>
                                                
                                        <form method="post" action="{{ url('admin-terms-conditions_update') }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                            <textarea id="elm1" name="area"><?=  $Terms_Conditions[0]->content;  ?></textarea>
                                            <div class="row">
                                            <div class="col-sm-9 col-xs-12"></div>                  
                                            <div class="col-sm-3 col-xs-12 mt-4">
                                                <button class="btn-submit form-control" type="submit">
                                                    Update
                                                </button>
                                            </div>
                                        </div> 
                                        </form> 
                                              
                                    </div><!--end card-body-->
                                </div><!--end card-->
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

        <!--Wysiwig js-->
        <script src="admin/assets/plugins/tinymce/tinymce.min.js"></script>
        <script src="admin/assets/pages/jquery.form-editor.init.js"></script>

        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>

    </body>
</html>
<style>
    .btn-submit {
        background-image: linear-gradient(180deg,#2b2b48 0%,#224858 50%);
        color: #fff;
    }
</style>
@endsection