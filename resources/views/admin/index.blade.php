@extends('admin.layouts.master')
@section('header_style')
<title>justiscall - Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description" />
<meta content="" name="author" />
@endsection


@section('main_content')
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
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body mb-0">
                                        <div class="row">                                            
                                            <div class="col-8 align-self-center">
                                                <div class="">
                                                    <h4 class="mt-0 header-title">Subscribed Pro</h4>
                                                    <h2 class="mt-0 font-weight-bold text-dark">0</h2> 
                                                    
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-4 align-self-center">
                                                <div class="icon-info text-right">
                                                <i class="dripicons-jewel bg-soft-pink"></i>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                    <div class="card-body overflow-hidden p-0">
                                        <div class="d-flex mb-0 h-100 dash-info-box">
                                            <div class="w-100">                                                
                                                <div class="apexchart-wrapper">
                                                    <div id="dash_spark_1" class="chart-gutters"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end card-body-->                                                                    
                                </div><!--end card-->
                            </div><!--end col-->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body mb-0">
                                        <div class="row">                                            
                                            <div class="col-8 align-self-center">
                                                <div class="">
                                                    <h4 class="mt-0 header-title">Unsubscribed Pro</h4>
                                                    <h2 class="mt-0 font-weight-bold text-dark">0</h2> 
                                                    
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-4 align-self-center">
                                                <div class="icon-info text-right">
                                                    <i class="dripicons-wallet bg-soft-success"></i>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                    <div class="card-body overflow-hidden p-0">
                                        <div class="d-flex mb-0 h-100 dash-info-box">
                                            <div class="w-100">                                                
                                                <div class="apexchart-wrapper">
                                                    <div id="apex_column1" class="chart-gutters"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end card-body-->                                                                    
                                </div><!--end card-->
                            </div><!--end col-->
                            
                            <div class="col-lg-4" style="height:85px !important">
                                <div class="card" style="height:85px !important">
                                    <div class="card-body mb-0" style="height:85px !important">
                                        <div class="row">                                            
                                            <div class="col-8 align-self-center" style="height:85px !important">
                                                <div class="">
                                                    <h4 class="mt-0 header-title">All Client</h4>
                                                    <h2 class="mt-0 font-weight-bold text-dark">0</h2> 
                                                    
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-4 align-self-center">
                                                <div class="icon-info text-right">
                                                    <i class="dripicons-wallet bg-soft-success"></i>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                    <div class="card-body overflow-hidden p-0">
                                        <div class="d-flex mb-0 h-100 dash-info-box">
                                            <div class="w-100">                                                
                                                <div class="apexchart-wrapper">
                                                    <div id="apex_column1" class="chart-gutters"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end card-body-->                                                                    
                                </div><!--end card-->
                            </div><!--end col-->
                                                  

                        </div><!--end row-->
                        <div class="row"> 
                            
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">World Wide Customers</h4>
                                        <div class="row">                                        
                                            <div class="col-12">
                                                <div id="world-map-markers" class="dashboard-map"></div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!--end col-->                                                
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body new-user order-list">
                                        <h4 class="header-title mt-0 mb-3">Subscribed Licence By Country</h4>
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="border-top-0">Product</th>
                                                        <th class="border-top-0">Pro Name</th>
                                                        <th class="border-top-0">Country</th>
                                                        <th class="border-top-0">Order Date/Time</th>
                                                        <th class="border-top-0">Pcs.</th>                                    
                                                        <th class="border-top-0">Amount ($)</th>
                                                        <th class="border-top-0">Status</th>
                                                    </tr><!--end tr-->
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img class="" src="admin/assets/images/products/img-1.png" alt="user"> </td>
                                                        <td>
                                                            Beg
                                                        </td>
                                                        <td>                                                                
                                                            <img src="admin/assets/images/flags/us_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle">
                                                        </td>
                                                        <td>3/03/2019 4:29 PM</td>
                                                        <td>200</td>                                   
                                                        <td> $750</td>
                                                        <td>                                                                        
                                                            <span class="badge badge-boxed  badge-soft-success">Shipped</span>
                                                        </td>
                                                    </tr><!--end tr-->
                                                    <tr>
                                                        <td>
                                                            <img class="" src="admin/assets/images/products/img-2.png" alt="user"> </td>
                                                        <td>
                                                            Watch
                                                        </td>
                                                        <td>                                                                
                                                            <img src="admin/assets/images/flags/french_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle">
                                                        </td>
                                                        <td>13/03/2019 1:09 PM</td>
                                                        <td>180</td>                                   
                                                        <td> $970</td>
                                                        <td>
                                                            <span class="badge badge-boxed  badge-soft-danger">Delivered</span>
                                                        </td>
                                                    </tr><!--end tr-->
                                                    <tr>
                                                        <td>
                                                            <img class="" src="admin/assets/images/products/img-3.png" alt="user"> </td>
                                                        <td>
                                                            Headphone
                                                        </td>
                                                        <td>                                                                
                                                            <img src="admin/assets/images/flags/spain_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle">
                                                        </td>
                                                        <td>22/03/2019 12:09 PM</td>
                                                        <td>30</td>                                   
                                                        <td> $2800</td>
                                                        <td>
                                                            <span class="badge badge-boxed badge-soft-warning">Pending</span>
                                                        </td>
                                                    </tr><!--end tr-->
                                                    <tr>
                                                        <td>
                                                            <img class="" src="admin/assets/images/products/img-4.png" alt="user"> </td>
                                                        <td>
                                                            Purse
                                                        </td>
                                                        <td>                                                                
                                                            <img src="admin/assets/images/flags/russia_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle">
                                                        </td>
                                                        <td>14/03/2019 8:27 PM</td>
                                                        <td>100</td>                                   
                                                        <td> $520</td>
                                                        <td>                                                                                                                                              
                                                            <span class="badge badge-boxed  badge-soft-success">Shipped</span>                                                                    
                                                        </td>
                                                    </tr><!--end tr-->
                                                    <tr>
                                                        <td>
                                                            <img class="" src="admin/assets/images/products/img-5.png" alt="user"> </td>
                                                        <td>
                                                            Shoe
                                                        </td>
                                                        <td>                                                                
                                                            <img src="admin/assets/images/flags/italy_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle">
                                                        </td>
                                                        <td>18/03/2019 5:09 PM</td>
                                                        <td>100</td>                                   
                                                        <td> $1150</td>
                                                        <td>
                                                            <span class="badge badge-boxed badge-soft-warning">Pending</span>
                                                        </td>
                                                    </tr><!--end tr-->
                                                    <tr>
                                                        <td>
                                                            <img class="" src="admin/assets/images/products/img-6.png" alt="user"> </td>
                                                        <td>
                                                            Boll
                                                        </td>
                                                        <td>                                                                
                                                            <img src="admin/assets/images/flags/us_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle">
                                                        </td>
                                                        <td>30/03/2019 4:29 PM</td>
                                                        <td>140</td>                                   
                                                        <td> $ 650</td>
                                                        <td>                                                                        
                                                            <span class="badge badge-boxed  badge-soft-success">Shipped</span>
                                                        </td>
                                                    </tr><!--end tr-->                                                    
                                                </tbody>
                                            </table> <!--end table-->                                               
                                        </div><!--end /div-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                    </div><!-- container -->

                    <footer class="footer text-center text-sm-left">
                        &copy; 2023 justiscall <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                    </footer>
                </div>
                <!-- end page content -->
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
@endsection

@section('script_code')

@endsection
