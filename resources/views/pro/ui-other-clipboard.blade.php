@extends('pro.layouts.master')
@section('main_content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Frogetor - Responsive Bootstrap 4 Admin Dashboard</title>
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
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">        
                                        <h4 class="mt-0 header-title">Clipboard Examples</h4>
                                        <p class="text-muted mb-4">Inpu example of clipboard</p>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="clipboardInput" value="Welcome to Frogetor !">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-info btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardInput"><i class="far fa-copy mr-2"></i>Copy</button>
                                                <button type="button" class="btn btn-dark btn-clipboard" data-clipboard-action="cut" data-clipboard-target="#clipboardInput"><i class="fas fa-cut mr-2"></i>Cut</button>
                                            </div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Clipboard Examples of Paragraph</h4>
                                        <p class="text-muted mb-4">Paragraph example of clipboard</p>
                                        <p id="clipboardParagraph" class="border p-3">Contrary to popular belief, Lorem Ipsum is not simply random text. 
                                            It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, 
                                            a Latin professor at Hampden-Sydney College in Virginia, looked 
                                        </p>
                                        <div class="mt-3">
                                                <button type="button" class="btn btn-info btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardParagraph"><i class="far fa-copy mr-2"></i>Copy</button>
                                        </div>
                                    </div>
                                </div>
                                
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">        
                                        <h4 class="mt-0 header-title">Clipboard Examples of Textarea</h4>
                                        <p class="text-muted mb-4">Textarea example of clipboard</p>
                                        <textarea  type="text" class="form-control" rows="3" id="clipboardTextarea">Welcome to Frogetor !</textarea>
                                        <div class="mt-3">
                                            <button type="button" class="btn btn-info btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardTextarea"><i class="far fa-copy mr-2"></i>Copy</button>
                                            <button type="button" class="btn btn-dark btn-clipboard" data-clipboard-action="cut" data-clipboard-target="#clipboardTextarea"><i class="fas fa-cut mr-2"></i>Cut</button>
                                        </div>                                       
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

        <script src="admin/assets/plugins/clipboard/clipboard.min.js"></script>
        <script src="admin/assets/pages/jquery.clipboard.init.js"></script>

        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>

    </body>
</html>
@endsection