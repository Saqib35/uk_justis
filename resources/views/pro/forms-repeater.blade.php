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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
    
                                        <h5 class="mt-0">Default Repeater</h5>
                                        <p class="text-muted font-13 mb-4">An interface to add and remove a repeatable group of input elements.</p>
    
                                        <form method="POST" class="form-horizontal well" role="form">
                                            <fieldset>
                                                <div class="repeater-default">
                                                    <div data-repeater-list="car">
                                                        <div data-repeater-item="">
                                                            <div class="form-group row d-flex align-items-end">
                                                                
                                                                <div class="col-sm-4">
                                                                    <label class="control-label">Make</label>
                                                                    <select name="car[0][make]" class="form-control">
                                                                        <option value="volkswagon" selected="">Volkswagon</option>
                                                                        <option value="honda">Honda</option>
                                                                        <option value="ford">Ford</option>
                                                                    </select>
                                                                </div><!--end col-->
                                                                
                                                                <div class="col-sm-4">
                                                                    <label class="control-label">Model</label>
                                                                    <input type="text" name="car[0][model]" value="Beetle" class="form-control">
                                                                </div><!--end col-->
                                                    
                                                                <div class="col-sm-3">
                                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck1"  name="car[0][features][]" value="ac">
                                                                        <label class="custom-control-label" for="customCheck1">Air Conditioning</label>
                                                                    </div>
    
                                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck2" name="car[0][features][]" value="abs">
                                                                        <label class="custom-control-label" for="customCheck2">Anti-Lock Brakes</label>
                                                                    </div>
                                                                </div><!--end col-->
                                                    
                                                                <div class="col-sm-1">
                                                                    <span data-repeater-delete="" class="btn btn-danger btn-sm">
                                                                        <span class="far fa-trash-alt mr-1"></span> Delete
                                                                    </span>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end /div-->
                                                
                                                        <div data-repeater-item="">
                                                            <div class="form-group row d-flex align-items-end">
                                                                
                                                                <div class="col-sm-4">
                                                                    <label class="control-label">Make</label>
                                                                    <select name="car[1][make]" class="form-control">
                                                                        <option value="volkswagon">Volkswagon</option>
                                                                        <option value="honda" selected="">Honda</option>
                                                                        <option value="ford">Ford</option>
                                                                    </select>
                                                                </div><!--end col-->                                                    
                                                                
                                                                <div class="col-sm-4">
                                                                    <label class="control-label">Model</label>
                                                                    <input type="text" name="car[1][model]" value="Accord" class="form-control">
                                                                </div><!--end col-->
                                                    
                                                                <div class="col-sm-3">
                                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck3"  name="car[0][features][]" value="ac">
                                                                        <label class="custom-control-label" for="customCheck3">Air Conditioning</label>
                                                                    </div>
    
                                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck4" name="car[0][features][]" value="abs">
                                                                        <label class="custom-control-label" for="customCheck4">Anti-Lock Brakes</label>
                                                                    </div>
                                                                </div><!--end col-->
                                                    
                                                                <div class="col-sm-1">
                                                                    <span data-repeater-delete="" class="btn btn-danger btn-sm">
                                                                        <span class="far fa-trash-alt mr-1"></span> Delete
                                                                    </span>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end /div-->
                                                    </div><!--end repet-list-->
                                                    <div class="form-group mb-0 row">
                                                        <div class="col-sm-12">
                                                            <span data-repeater-create="" class="btn btn-light">
                                                                <span class="fas fa-plus"></span> Add
                                                            </span>
                                                            <input type="submit" value="Submit" class="btn btn-success">
                                                        </div><!--end col-->
                                                    </div><!--end row-->                                         
                                                </div> <!--end repeter-->                                           
                                            </fieldset><!--end fieldset-->
                                        </form><!--end form-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!-- end col -->

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
    
                                        <h5 class="mt-0">Custom Show/Hide Repeater</h5>
                                        <p class="text-muted mb-4">An interface to add and remove a repeatable group of input elements.</p>
    
                                        <form method="POST" class="form-horizontal well" role="form">
                                            <fieldset>
                                                <div class="repeater-custom-show-hide">
                                                    <div data-repeater-list="car">
                                                        <div data-repeater-item="">
                                                            <div class="form-group row  d-flex align-items-end">
                                                                
                                                                <div class="col-sm-4">
                                                                    <label class="control-label">Make</label>
                                                                    <select name="car[0][make]" class="form-control">
                                                                        <option value="volkswagon" selected="">Volkswagon</option>
                                                                        <option value="honda">Honda</option>
                                                                        <option value="ford">Ford</option>
                                                                    </select>
                                                                </div><!--end col-->                                                   
                                                                
                                                                <div class="col-sm-4">
                                                                    <label class="control-label">Model</label>
                                                                    <input type="text" name="car[0][model]" value="Beetle" class="form-control">
                                                                </div><!--end col-->
                                                    
                                                                <div class="col-sm-3">
                                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck5"  name="car[0][features][]" value="ac">
                                                                        <label class="custom-control-label" for="customCheck5">Air Conditioning</label>
                                                                    </div>
    
                                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck6" name="car[0][features][]" value="abs">
                                                                        <label class="custom-control-label" for="customCheck6">Anti-Lock Brakes</label>
                                                                    </div>
                                                                </div><!--end col-->
                                                    
                                                                <div class="col-sm-1">
                                                                    <span data-repeater-delete="" class="btn btn-danger btn-sm">
                                                                        <span class="far fa-trash-alt mr-1"></span> Delete
                                                                    </span>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end /div-->
                                                
                                                        <div data-repeater-item="">
                                                            <div class="form-group row  d-flex align-items-end">                                                            
                                                                <div class="col-sm-4">
                                                                    <label class="control-label">Make</label>
                                                                    <select name="car[1][make]" class="form-control">
                                                                        <option value="volkswagon">Volkswagon</option>
                                                                        <option value="honda" selected="">Honda</option>
                                                                        <option value="ford">Ford</option>
                                                                    </select>
                                                                </div><!--end col-->                                                    
                                                                
                                                                <div class="col-sm-4">
                                                                    <label class="control-label">Model</label>
                                                                    <input type="text" name="car[1][model]" value="Accord" class="form-control">
                                                                </div><!--end col-->
                                                    
                                                                <div class="col-sm-3">
                                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck7"  name="car[0][features][]" value="ac">
                                                                        <label class="custom-control-label" for="customCheck7">Air Conditioning</label>
                                                                    </div>
    
                                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck8" name="car[0][features][]" value="abs">
                                                                        <label class="custom-control-label" for="customCheck8">Anti-Lock Brakes</label>
                                                                    </div>
                                                                </div><!--end col-->
                                                    
                                                                <div class="col-sm-1">
                                                                    <span data-repeater-delete="" class="btn btn-danger btn-sm">
                                                                        <span class="far fa-trash-alt mr-1"></span> Delete
                                                                    </span>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end /div-->
                                                    </div><!--end repet-list-->

                                                    <div class="form-group row mb-0">
                                                        <div class="col-sm-12">
                                                            <span data-repeater-create="" class="btn btn-light btn-md">
                                                                <span class="fa fa-plus"></span> Add
                                                            </span>
                                                            <input type="submit" value="Submit" class="btn btn-success">
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div> <!--end repeter-->                                           
                                            </fieldset><!--end fieldset-->
                                        </form><!--end form-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
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

        <script src="admin/assets/plugins/repeater/jquery.repeater.min.js"></script>
        <script src="admin/assets/pages/jquery.form-repeater.js"></script>

        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>

    </body>
</html>
@endsection