@extends('pro.layouts.master')
@section('main_content')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Justice Call</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by themesbrand" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="admin/assets/images/favicon.ico">

        <link href="admin/assets/plugins/ticker/jquery.jConveyorTicker.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/plugins/dropify/css/dropify.min.css" rel="stylesheet">


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
                                    <div class="card-body border-bottom">
                                        <h4 class="mt-0 header-title">Justice Call</h4>
                                        <p class="text-muted mb-4 font-13">Welcome to Justice Call</p>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body profile-nav"> 
                                        <div class="nav flex-column nav-pills" id="profile-tab" aria-orientation="vertical">
                                            <a class="nav-link active" id="profile-dash-tab" data-toggle="pill" href="#profile-dash" aria-selected="true">All</a>
                                            <a class="nav-link" id="profile-activities-tab" data-toggle="pill" href="#profile-activities" aria-selected="false">Recent</a>
                                            <a class="nav-link d-flex justify-content-between align-items-center" id="profile-pro-stock-tab" data-toggle="pill" href="#profile-pro-stock" aria-selected="false">Today</a>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->

                            </div><!--end col-->

                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="profile-tabContent">
                                            <div class="tab-pane fade show active" id="profile-dash">
                                                    
                                                <div class="container-fluid"> 
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="card-body table-responsive">
                                                                    <h4 class="mt-0 header-title">
                                                                        All Clients
                                                                    </h4>
                                                                   
                                                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>ID</th>
                                                                                <th>CLIENT ID</th>
                                                                                <th>CLIENT NAME</th>
                                                                                <th>STARTTIME</th>
                                                                                <th>ENDTIME </th>
                                                                                <th>APPOINTMENT TYPE</th>
                                                                                <th>DESCRIPTION</th>
                                                                                <th>LAST VISIT</th>
                                                                                <th>ACTION</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>123</td>
                                                                                <td>454</td>
                                                                                <td>Client Not Available</td>
                                                                                <td>2023-01-31 14:00:00</td>
                                                                                <td>2023-01-31 14:15:00</td>
                                                                                <td>Video Calling</td>
                                                                                <td>Appointment </td>
                                                                                <td>60</td>
                                                                           
                                                                                <td>
                                                                                    <button class="btn btn-info" data-toggle="modal" data-target="#editAppoint">Edit Appointment</button>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                </div><!-- container -->

                                                <!-- Modal -->
                                                <div class="modal fade" id="editAppoint" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Edit Appointment</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group col-sm-12 col-xs-12">
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar"></i></span>
                                                                                </div>
                                                                                <input type="date" class="form-control" id="date" name="date">
                                                                            </div>                                  
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-12">
                                                                        <div class="form-group col-sm-12 col-xs-12">
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-clock font-16"></i></span>
                                                                                </div>
                                                                                <input type="time" class="form-control" id="time" name="time">
                                                                            </div>                                  
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--end tab-pane-->

                                            <div class="tab-pane fade" id="profile-activities">
                                                <div class="container-fluid"> 
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="card-body table-responsive">
                                                                    <h4 class="mt-0 header-title">
                                                                        All Clients
                                                                    </h4>
                                                                   
                                                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>ID</th>
                                                                                <th>CLIENT ID</th>
                                                                                <th>CLIENT NAME</th>
                                                                                <th>STARTTIME</th>
                                                                                <th>ENDTIME </th>
                                                                                <th>APPOINTMENT TYPE</th>
                                                                                <th>DESCRIPTION</th>
                                                                                <th>LAST VISIT</th>
                                                                                <th>ACTION</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                </div><!-- container -->
                                            </div><!--end tab-pane-->

                                            <div class="tab-pane fade" id="profile-pro-stock">
                                                <div class="container-fluid"> 
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="card-body table-responsive">
                                                                    <h4 class="mt-0 header-title">
                                                                        All Clients
                                                                    </h4>
                                                                   
                                                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>ID</th>
                                                                                <th>CLIENT ID</th>
                                                                                <th>CLIENT NAME</th>
                                                                                <th>STARTTIME</th>
                                                                                <th>ENDTIME </th>
                                                                                <th>APPOINTMENT TYPE</th>
                                                                                <th>DESCRIPTION</th>
                                                                                <th>LAST VISIT</th>
                                                                                <th>ACTION</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                           
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                </div><!-- container -->
                                            </div><!--end tab-pen-->

                                        </div>  <!--end tab-content-->                                                                              
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

        <script src="admin/assets/plugins/moment/moment.js"></script>
        <script src="admin/assets/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
        <script src="https://apexcharts.com/samples/assets/series1000.js"></script>
        <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
        <script src="admin/assets/plugins/dropify/js/dropify.min.js"></script>
        <script src="admin/assets/plugins/ticker/jquery.jConveyorTicker.min.js"></script>
        <script src="admin/assets/plugins/peity-chart/jquery.peity.min.js"></script>
        <script src="admin/assets/plugins/chartjs/chart.min.js"></script>
        <script src="admin/assets/pages/jquery.profile.init.js"></script>

        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>

    </body>
</html>
@endsection