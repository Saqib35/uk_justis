@extends('client.layouts.main')
@section('main_content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Frogetor - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
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
                            <div class="col-lg-12">
                                <table class="body-wrap" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f2f5f7; margin: 0;" bgcolor="#f2f5f7">
                                    <tr>                                   
                                        <td class="container" width="600" style=" display: block !important; max-width: 600px !important; clear: both !important; " valign="top">
                                            <div class="content" style="padding: 20px;">
                                                <table class="main" width="100%" cellpadding="0" cellspacing="0" style="border: 1px solid #e9e9e9;" bgcolor="#fff">
                            
                                                    <tr>
                                                        <td class="alert alert-primary border-0 bg-primary" style="padding: 20px; border-radius: 0;" align="center" valign="top">
                                                            <img src="admin/assets/images/bell.png" alt="" style="margin-left: auto; margin-right: auto; display:block;width: 60px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="alert alert-dark border-0 bg-dark" style="color:#ffffff; padding: 20px; border-radius: 0;" align="center" valign="top">
                                                            Warning: You're approaching your limit. Please upgrade.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="content-wrap" style="padding: 20px;" valign="top">
                                                            <table width="100%" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; padding: 10px" valign="top">
                                                                        You have <strong style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">1 free report</strong> remaining.
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; padding: 10px 10px 20px;" valign="top">
                                                                        Add your credit card now to upgrade your account to a premium plan to ensure you don't miss out on any reports.
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; padding: 0 0 20px;" valign="top">
                                                                        <a href="#" class="btn-primary" style=" font-size: 14px; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: block; border-radius: 5px; text-transform: capitalize; background-color: #5766da; border-color: #5766da; padding: 8px 0;">Upgrade my account</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; text-align: center;" valign="top">
                                                                        Thanks for choosing <b>Frogetor</b> Admin.
                                                                    </td>
                                                                </tr>                                                            
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>                                            
                                            </div>
                                        </td>
                                        <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
                                    </tr>
                                </table><!--end table-->                                
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

        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>

    </body>
</html>
@endsection