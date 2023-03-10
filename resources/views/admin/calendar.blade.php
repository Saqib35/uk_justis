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
                        	<div class="col-md-2 col-xs-12 d-none">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>All Firms</h4>
                                        <ul>
                                        	<li>Lawyer</li>
                                        	<li>Bailiff</li>
											<li>Notarie</li>
											<li>Legal Representative</li>
											<li>Chartered Accountant</li>
											<li>Lawyer Firm</li>
											<li>Bailiff Firm</li>
											<li>Notarie Firm</li>
											<li>Legal Representative Firm</li>
											<li>Chartered Accountant Firm</li>

                                        </ul>
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h4>All Firms</h4>
                                        <ul>
                                        	<li>Lawyer</li>
                                        	<li>Bailiff</li>
											<li>Notarie</li>
											<li>Legal Representative</li>
											<li>Chartered Accountant</li>
											<li>Lawyer Firm</li>
											<li>Bailiff Firm</li>
											<li>Notarie Firm</li>
											<li>Legal Representative Firm</li>
											<li>Chartered Accountant Firm</li>

                                        </ul>
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <div class="col-md-8 col-xs-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div id="calendar"></div>
                                        <div style="clear: both;"></div>
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                        	<h4>Today Schedule</h4>
                                        	<div class="row">
                                        		<div class="col-6">
	                                        		<div class="card">
	                                    				<div class="card-body">	
	                                    					<div class="text-center">
		                                    					<span style="color: red;"><b>1</b></span>
		                                    					<hr>
		                                    					Schedule
	                                    					</div>
	                                    				</div>
	                                    			</div>
	                                    		</div>
	                                    		<div class="col-6">
	                                        		<div class="card">
	                                    				<div class="card-body">	
	                                    					<div class="text-center">
		                                    					<span style="color: blue;"><b>0</b></span>
		                                    					<hr>
		                                    					Check In
	                                    					</div>
	                                    				</div>
	                                    			</div>
	                                    		</div>
	                                    		<div class="col-6">
	                                        		<div class="card">
	                                    				<div class="card-body">	
	                                    					<div class="text-center">
		                                    					<span style="color: green;"><b>0</b></span>
		                                    					<hr>
		                                    					Engaged
	                                    					</div>
	                                    				</div>
	                                    			</div>
	                                    		</div>
	                                    		<div class="col-6">
	                                        		<div class="card">
	                                    				<div class="card-body">	
	                                    					<div class="text-center">
		                                    					<span style="color: pink;"><b>2</b></span>
		                                    					<hr>
		                                    					Check Out
	                                    					</div>
	                                    				</div>
	                                    			</div>
	                                    		</div>

                                        		
                                        	</div>
                                        	
                                        </div>
                                        <div class="card">
                                        	<div class="card-body" style="border-left: 5px solid red;">
                                        		<h6>Developer <i style="float: right;" class="fa fa-arrow-right"></i></h6>
                                        		<h6>Checked Out <i style="float: right;" class="mdi mdi-calendar-check"></i></h6>
                                        		<button style="float: right;" class="btn btn-primary"> View Client</button>
                                        	</div>
                                        </div>

                                        <div class="card">
                                        	<div class="card-body" style="border-left: 5px solid green;">
                                        		<h6>Developer <i style="float: right;" class="fa fa-arrow-right"></i></h6>
                                        		<h6>Checked Out <i style="float: right;" class="mdi mdi-calendar-check"></i></h6>
                                        		<button style="float: right;" class="btn btn-primary"> View Client</button>
                                        	</div>
                                        </div>

                                        <div class="card">
                                        	<div class="card-body" style="border-left: 5px solid yellow;">
                                        		<h6>Developer <i style="float: right;" class="fa fa-arrow-right"></i></h6>
                                        		<h6>Checked Out <i style="float: right;" class="mdi mdi-calendar-check"></i></h6>
                                        		<button style="float: right;" class="btn btn-primary"> View Client</button>
                                        	</div>
                                        </div>
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
