<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <!-- App css -->
        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
        <style>
		    body{
		        background-image: url({{asset('assets/img/adminimages.jpg')}});
		        height: 100vh;
		        background-size: cover;
		        background-repeat: no-repeat;
		    }
		</style>
        @yield('header_style')
    </head>
    <body>
       @yield('main_content')
        <!-- jQuery  -->
        <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/waves.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.slimscroll.min.js')}}"></script>

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
