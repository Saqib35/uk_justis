<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        
        <link href="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
        @php
        $headerFooter= \App\Models\header_and_footer::get();
        @endphp 
                        
        <link rel="shortcut icon" href="{{ $headerFooter[0]->logo  }}">

        <!-- App css -->
        <link href="{{ asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
         <!-- Clock css -->
        <link href="{{ url('admin/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
        <!-- Plugins css -->
        <link href="{{ url('admin/assets/plugins/timepicker/tempusdominus-bootstrap-4.css')}}" rel="stylesheet" />
        <link href="{{ url('admin/assets/plugins/timepicker/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
        <link href="{{ url('admin/assets/plugins/clockpicker/jquery-clockpicker.min.css')}}" rel="stylesheet" />
        <link href="{{ url('admin/assets/plugins/colorpicker/asColorPicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('admin/assets/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{ url('admin/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
        <link href="{{ url('admin/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
        <link href="{{ url('admin/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" /> 
        <style id="clock-animations"></style>
        <link href="admin/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 
        <link href="admin/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        @yield('header_style')
    </head>

    <body>
        @yield('main_content')
     

        <!-- jQuery  -->
        <script src="{{ asset('admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('admin/assets/js/metisMenu.min.js')}}"></script>
        <script src="{{ asset('admin/assets/js/waves.min.js')}}"></script>
        <script src="{{ asset('admin/assets/js/jquery.slimscroll.min.js')}}"></script>

        @yield('scriptlinks')

        <!-- App js -->
        <script src="{{ asset('admin/assets/js/app.js')}}"></script>
        @yield('script_code')


    </body>
</html>