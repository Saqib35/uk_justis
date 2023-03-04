@extends('client.layouts.main')
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

        <!-- Sweet Alert -->
        <link href="admin/assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

        <!-- App css -->
        <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

         @include('client.layouts.header')
        
         <div class="page-wrapper">
            <div class="page-wrapper-inner">
   
   
                <!-- Left Sidenav -->
                  @include('client.includes.sidebar')
                <!-- end left-sidenav-->

            
                <!-- Page Content-->
                <div class="page-content">
                    <div class="container-fluid"> 
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">        
                                        <h4 class="mt-0 header-title">Examples</h4>
                                        <p class="text-muted mb-4">A beautiful, responsive, customizable
                                            and accessible (WAI-ARIA) replacement for JavaScript's popup boxes. Zero
                                            dependencies.
                                        </p>
                                        <div class="table-responsive">
                                            <table class="table mb-0">                                                        
                                                <tbody>
                                                    <tr class="border-0">
                                                        <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-pink"></i>A basic message</td>
                                                        <td class="border-0"><button type="button" class="btn btn-primary waves-effect waves-light" id="sa-basic">Click me</button></td>
                                                    </tr>
                                                    <tr class="border-0">
                                                        <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-success"></i>A title with a text under</td>
                                                        <td class="border-0"><button type="button" class="btn btn-primary waves-effect waves-light" id="sa-title">Click me</button></td>
                                                    </tr>
                                                    <tr class="border-0">
                                                        <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-warning"></i>A success message!</td>
                                                        <td class="border-0"><button type="button" class="btn btn-primary waves-effect waves-light" id="sa-success">Click me</button></td>
                                                    </tr>
                                                    <tr class="border-0">
                                                        <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-info"></i>A message with custom Image Header</td>
                                                        <td class="border-0"><button type="button" class="btn btn-primary waves-effect waves-light" id="sa-image">Click me</button></td>
                                                    </tr>
                                                    <tr class="border-0">
                                                        <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-primary"></i>Ajax request example</td>
                                                        <td class="border-0"><button type="button" class="btn btn-primary waves-effect waves-light" id="ajax-alert">Click me</button></td>
                                                    </tr>
                                                    <tr class="border-0">
                                                        <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-secondary"></i>Chaining modals (queue) example</td>
                                                        <td class="border-0"><button type="button" class="btn btn-primary waves-effect waves-light" id="chaining-alert">Click me</button></td>
                                                    </tr>
                                                    <tr class="border-0">
                                                        <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-danger"></i>A message with auto close timer</td>
                                                        <td class="border-0"><button type="button" class="btn btn-primary waves-effect waves-light" id="sa-close">Click me</button></td>
                                                    </tr>
                                                    <tr class="border-0">
                                                        <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-purple"></i>Custom HTML description and buttons</td>
                                                        <td class="border-0"><button type="button" class="btn btn-primary waves-effect waves-light" id="custom-html-alert">Click me</button></td>
                                                    </tr>
                                                    <tr class="border-0">
                                                        <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-success"></i>By passing a parameter, you can execute something else for "Cancel".</td>
                                                        <td class="border-0"><button type="button" class="btn btn-primary waves-effect waves-light" id="sa-params">Click me</button></td>
                                                    </tr>
                                                    <tr class="border-0">
                                                        <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-warning"></i>A warning message, with a function attached to the "Confirm"-button...</td>
                                                        <td class="border-0"><button type="button" class="btn btn-primary waves-effect waves-light" id="sa-warning">Click me</button></td>
                                                    </tr>
                                                    <tr class="border-0">
                                                        <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-info"></i>A message with custom width, padding and background</td>
                                                        <td class="border-0"><button type="button" class="btn btn-primary waves-effect waves-light" id="custom-padding-width-alert">Click me</button></td>
                                                    </tr>
                                                    <tr class="border-0">
                                                        <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-pink"></i>Dynamic queue example</td>
                                                        <td class="border-0"><button type="button" class="btn btn-primary waves-effect waves-light" id="dynamic-alert">Click me</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!--table responsive-->
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

        <!-- Sweet-Alert  -->
        <script src="admin/assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="admin/assets/pages/jquery.sweet-alert.init.js"></script>

        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>

    </body>
</html>
@endsection