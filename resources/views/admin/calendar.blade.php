@extends('admin.layouts.master')
@section('header_style')
<title>justiscall - Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description" />
<meta content="" name="author" />
<link href="admin/assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />
<link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="admin/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
<link href="admin/assets/css/style.css" rel="stylesheet" type="text/css" />

@endsection


@section('main_content')
         @include('admin.layouts.header')
        
        <div class="page-wrapper">
            <div class="page-wrapper-inner">

                <!-- Left Sidenav -->
                  @include('admin.includes.sidebar')
                <!-- end left-sidenav-->
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div id="calendar"></div>
                                        <div style="clear: both;"></div>
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>
                        <!-- End row -->
                    </div>
                    <!-- container -->
                    <footer class="footer text-center text-sm-left">
                        &copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                    </footer>
                </div>
            </div>
        </div>
@endsection
      

@section("scriptlinks")
        <script src="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

        <script src="{{ asset('admin/assets/plugins/moment/moment.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
        <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
        <script src="https://apexcharts.com/samples/assets/series1000.js"></script>
        <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
        <script src="{{ asset('admin/assets/pages/jquery.dashboard.init.js')}}"></script>
        
   
        
        <script src="admin/assets/plugins/fullcalendar/js/fullcalendar.min.js"></script>
        <script src="admin/assets/pages/jquery.calendar.js"></script>
        <script src="admin/assets/pages/lang-all.js"></script>
@endsection

@section('script_code')

@endsection
