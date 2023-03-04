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

        <link href="admin/assets/plugins/form-wizard/css/smart_wizard.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/plugins/form-wizard/css/smart_wizard_theme_arrows.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/plugins/form-wizard/css/smart_wizard_theme_circles.css" rel="stylesheet" type="text/css" />

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
                                        <h4 class="mt-0 header-title">Form Wizard</h4>
                                        <p class="text-muted mb-4">Basic example to demonstrate smart wizard styles.</p> 
                                        <div id="smart_wizard">
                                            <ul>
                                                <li><a href="#step-1">Step Title<br /><small>Step description</small></a></li>
                                                <li><a href="#step-2">Step Title<br /><small>Step description</small></a></li>
                                                <li><a href="#step-3">Step Title<br /><small>Step description</small></a></li>
                                                <li><a href="#step-4">Step Title<br /><small>Step description</small></a></li>
                                            </ul>
                                         
                                            <div class="p-3 sw-default-content mb-3">
                                                <div id="step-1" class="">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                         when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                                         It has survived not only five centuries, but also the leap into electronic typesetting, 
                                                         remaining essentially unchanged. It was popularised in the 1960s with the release of 
                                                         Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
                                                         software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply 
                                                         dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                                                         standard dummy text ever since the 1500s, when an unknown printer took a galley of 
                                                         type and scrambled it to make a type specimen book. 
                                                    </p>
                                                </div>
                                                <div id="step-2" class="">
                                                    <p>It was popularised in the 1960s with the release of 
                                                        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
                                                        software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply 
                                                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                                                        standard dummy text ever since the 1500s, when an unknown printer took a galley of 
                                                        type and scrambled it to make a type specimen book.
                                                    </p>
                                                </div>
                                                <div id="step-3" class="">
                                                    <p>Lorem Ipsum has been the industry's 
                                                        standard dummy text ever since the 1500s, when an unknown printer took a galley of 
                                                        type and scrambled it to make a type specimen book. 
                                                    </p>
                                                </div>
                                                <div id="step-4" class="">
                                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, 
                                                        remaining essentially unchanged.
                                                    </p>
                                                </div>
                                            </div><!--end /div-->
                                        </div> <!--end smartwizard-->                                
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Form Wizard Arrows</h4>
                                        <p class="text-muted mb-4">Basic example to demonstrate smart wizard arrows styles.</p> 
                                        <div id="smart_wizard_arrows">
                                            <ul>
                                                <li><a href="#step-5">Step Title<br /><small>Step description</small></a></li>
                                                <li><a href="#step-6">Step Title<br /><small>Step description</small></a></li>
                                                <li><a href="#step-7">Step Title<br /><small>Step description</small></a></li>
                                                <li><a href="#step-8">Step Title<br /><small>Step description</small></a></li>
                                            </ul>
                                            
                                            <div class="p-3 sw-arrows-content mb-3">
                                                <div id="step-5" class="">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                                            It has survived not only five centuries, but also the leap into electronic typesetting, 
                                                            remaining essentially unchanged. It was popularised in the 1960s with the release of 
                                                            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
                                                            software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply 
                                                            dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                                                            standard dummy text ever since the 1500s, when an unknown printer took a galley of 
                                                            type and scrambled it to make a type specimen book. 
                                                    </p>
                                                </div>
                                                <div id="step-6" class="">
                                                    <p>It was popularised in the 1960s with the release of 
                                                        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
                                                        software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply 
                                                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                                                        standard dummy text ever since the 1500s, when an unknown printer took a galley of 
                                                        type and scrambled it to make a type specimen book.
                                                    </p>
                                                </div>
                                                <div id="step-7" class="">
                                                    <p>Lorem Ipsum has been the industry's 
                                                        standard dummy text ever since the 1500s, when an unknown printer took a galley of 
                                                        type and scrambled it to make a type specimen book. 
                                                    </p>
                                                </div>
                                                <div id="step-8" class="">
                                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, 
                                                        remaining essentially unchanged.
                                                    </p>
                                                </div>
                                            </div><!--end /div-->
                                        </div> <!--end smartwizard-->                                
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                        

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Form Wizard Rounded</h4>
                                        <p class="text-muted mb-4">Basic example to demonstrate smart wizard rounded styles.</p> 
                                        <div id="smart_wizard_circles">
                                            <ul>
                                                <li><a href="#step-9"><i class="far fa-user d-block"></i><small>Step description</small></a></li>
                                                <li><a href="#step-10"><i class="far fa-heart d-block"></i><small>Step description</small></a></li>
                                                <li><a href="#step-11"><i class="far fa-envelope d-block"></i><small>Step description</small></a></li>
                                                <li><a href="#step-12"><i class="fas fa-phone d-block"></i><small>Step description</small></a></li>
                                            </ul>
                                            
                                            <div class="p-3 sw-circle-content mb-3">
                                                <div id="step-9" class="">
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                                            It has survived not only five centuries, but also the leap into electronic typesetting, 
                                                            remaining essentially unchanged. It was popularised in the 1960s with the release of 
                                                            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
                                                            software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply 
                                                            dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                                                            standard dummy text ever since the 1500s, when an unknown printer took a galley of 
                                                            type and scrambled it to make a type specimen book. 
                                                    </p>
                                                </div>
                                                <div id="step-10" class="">
                                                    <p class="mb-0">It was popularised in the 1960s with the release of 
                                                        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
                                                        software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply 
                                                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                                                        standard dummy text ever since the 1500s, when an unknown printer took a galley of 
                                                        type and scrambled it to make a type specimen book.
                                                    </p>
                                                </div>
                                                <div id="step-11" class="">
                                                    <p class="mb-0">Lorem Ipsum has been the industry's 
                                                        standard dummy text ever since the 1500s, when an unknown printer took a galley of 
                                                        type and scrambled it to make a type specimen book. 
                                                    </p>
                                                </div>
                                                <div id="step-12" class="">
                                                    <p class="mb-0">It has survived not only five centuries, but also the leap into electronic typesetting, 
                                                        remaining essentially unchanged.
                                                    </p>
                                                </div>
                                            </div><!--end /div-->
                                        </div> <!--end smartwizard-->                                
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

        <script src="admin/assets/plugins/form-wizard/js/jquery.smartWizard.min.js"></script>
        <script src="admin/assets/pages/jquery.form-wizard.init.js"></script>

        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>

    </body>
</html>
@endsection