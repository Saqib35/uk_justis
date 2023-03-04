<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">
        <link href="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">

        <!-- App css -->
        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
        @yield('header_style')
        <style>
            .btn-submit, .btn-cancel{
                background-image: linear-gradient(180deg,#2b2b48 0%,#224858 50%);
                color: #fff;
            }
        </style>
    </head>

    <body>
          @yield('main_content')


        
        <!-- jQuery  -->
        <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/waves.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.slimscroll.min.js')}}"></script>

        
        @yield('scriptlinks')
        <!-- App js -->
        <script src="{{asset('admin/assets/js/app.js')}}"></script>
        @yield('script_code')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                @if(Session::has('success') )
                     Swal.fire(
                      'Success!',
                      "{{ session('success')}}",
                      'success'
                    )
                @endif

                @if(Session::has('not_success') )
                     Swal.fire(
                      'Error!',
                      "{{ session('not_success')}}",
                      'error'
                    )
                @endif

                @if(Session::has('error') )
                     Swal.fire(
                      'Error!',
                      "",
                      'error'
                    )
                @endif

             });  
        </script>
    </body>
</html>
