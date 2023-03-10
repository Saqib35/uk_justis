@extends('client.layouts.main')
@section('main_content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Frogetor - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by mannatthemes" name="description" />
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
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Gradient Line Chart</h4>
                                        <div class="chart-demo">
                                            <div id="apex_line1" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Line with Data Labels</h4>
                                        <div class="chart-demo">
                                            <div id="apex_line2" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Zoomable Timeseries</h4>
                                        <div class="chart-demo">
                                            <div id="apex_line3" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Irregular TimeSeries</h4>
                                        <div class="chart-demo">
                                            <div id="apex_area1" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Area Chart - Datetime X-axis</h4>
                                        <div class="chart-demo">
                                            <div class="toolbar">
                                                <button class="btn btn-sm btn-success" id="one_month">1M</button>
                                                <button class="btn btn-sm btn-success" id="six_months">6M</button>
                                                <button class="btn btn-sm btn-success" id="one_year" class="active">1Y</button>
                                                <button class="btn btn-sm btn-success" id="ytd">YTD</button>
                                                <button class="btn btn-sm btn-success" id="all">ALL</button>
                                            </div>
                                            <div id="apex_area2" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Basic Column Chart</h4>
                                        <div class="chart-demo">
                                            <div id="apex_column1" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Column Chart with Datalabels</h4>
                                        <div class="chart-demo">
                                            <div id="apex_column2" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->                            
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Basic Bar Chart</h4>
                                        <div class="chart-demo">
                                            <div id="apex_bar1" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Bar with Negative Values</h4>
                                        <div class="chart-demo">
                                            <div id="apex_bar2" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->                            
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Line, Column & Area Chart</h4>
                                        <div class="chart-demo">
                                            <div id="apex_mixed1" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Multiple Y-Axis Chart</h4>
                                        <div class="chart-demo">
                                            <div id="apex_mixed2" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->                            
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Line & Area Chart</h4>
                                        <div class="chart-demo">
                                            <div id="apex_mixed3" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->                                                        
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Simple Bubble Chart</h4>
                                        <div class="chart-demo">
                                            <div id="apex_bubble1" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">3D Bubble Chart</h4>
                                        <div class="chart-demo">
                                            <div id="apex_bubble2" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->                            
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Scatter (XY) Chart</h4>
                                        <div class="chart-demo">
                                            <div id="apex_scatter1" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Scatter Chart - Datetime</h4>
                                        <div class="chart-demo">
                                            <div id="apex_scatter2" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->                            
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Simple Candlestick Chart</h4>
                                        <div class="chart-demo">
                                            <div id="apex_candlestick1" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Combo Candlestick Chart</h4>
                                        <div class="chart-demo">
                                            <div id="apex_candlestick2" class="apex-charts"></div>
                                            <div id="apex_candlestick3" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->                            
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Simple Pie Chart</h4>
                                        <div class="">
                                            <div id="apex_pie1" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Gradient Donut Chart</h4>
                                        <div class="">
                                            <div id="apex_pie2" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col--> 
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Patterned Donut Chart</h4>
                                        <div class="">
                                            <div id="apex_pie3" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Pie Chart with Image fill</h4>
                                        <div class="">
                                            <div id="apex_pie4" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->                            
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Basic RadialBar Chart</h4>
                                        <div class="chart-demo m-0">
                                            <div id="apex_radialbar1" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Multiple RadialBars</h4>
                                        <div class="chart-demo m-0">
                                            <div id="apex_radialbar2" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col--> 
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Stroked Circular Guage</h4>
                                        <div class="chart-demo m-0">
                                            <div id="apex_radialbar3" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Gradient Circular Chart</h4>
                                        <div class="chart-demo m-0">
                                            <div id="apex_radialbar4" class="apex-charts"></div>
                                        </div>                                        
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->                            
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-4">Sparkline inline</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div id="spark1" class="apex-charts"></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div id="spark2" class="apex-charts"></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div id="spark3" class="apex-charts"></div>
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
                                        <h4 class="header-title mt-0 mb-4">Sparkline Table</h4>
                                        <div class="table-responsive">
                                            <table class="table table-centered mb-0">
                                                <thead class="thead-light">
                                                    <th>Total Value</th>
                                                    <th>Percentage of Portfolio</th>
                                                    <th>Last 10 days</th>
                                                    <th>Volume</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>$32,554</td>
                                                        <td>15%</td>
                                                        <td>
                                                            <div id="chart1"></div>
                                                        </td>
                                                        <td>
                                                            <div id="chart5"></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>$23,533</td>
                                                        <td>7%</td>
                                                        <td>
                                                            <div id="chart2"></div>
                                                        </td>
                                                        <td>
                                                            <div id="chart6"></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>$54,276</td>
                                                        <td>9%</td>
                                                        <td>
                                                            <div id="chart3"></div>
                                                        </td>
                                                        <td>
                                                            <div id="chart7"></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>$11,533</td>
                                                        <td>2%</td>
                                                        <td>
                                                            <div id="chart4"></div>
                                                        </td>
                                                        <td>
                                                            <div id="chart8"></div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>                                      
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
        <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
        <script src="admin/assets/pages/jquery.apexcharts.init.js"></script>

        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>

    </body>
</html>
@endsection
