<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        
        <link href="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">

        <!-- App css -->
        <link href="{{ asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
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