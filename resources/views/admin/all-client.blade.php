@extends('admin.layouts.master')
@section('header_style')
<title>justiscall - Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description" />
<meta content="" name="author" />
<style>
    .action .mdi{
        font-size: 20px;
    }
    .profile-img-div{
        height: 50px;
        width: 50px;
    }
    .profile-img-div img{
        height: 100%;
        width: 100%;
    }
</style>
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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">All Clients</h4>
                                        <p class="text-muted mb-4 font-13">
                                            Welcome to JUSTISCALL
                                        </p>        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->


                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body profile-nav"> 
                                        <div class="nav flex-column nav-pills" id="profile-tab" aria-orientation="vertical">
                                            <a class="nav-link active" id="profile-dash-tab" data-toggle="pill" href="#profile-dash" aria-selected="true">All</a>
                                            <a class="nav-link" id="profile-activities-tab" data-toggle="pill" href="#profile-activities" aria-selected="false">Today</a>
                                            <a class="nav-link d-flex justify-content-between align-items-center" id="profile-pro-stock-tab" data-toggle="pill" href="#profile-pro-stock" aria-selected="false">Recent</a>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->

                            </div><!--end col-->

                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="profile-tabContent">
                                            <div class="tab-pane fade show active" id="profile-dash">
                                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                    <tr>
                                                        <th>Sr No.</th>
                                                        <th>PROFILE</th>
                                                        <th>CLIENT'S ID</th>
                                                        <th>NAME</th>
                                                        <th>AGE</th>
                                                        <th>ADDRESS</th>
                                                        <th>PHONE</th>
                                                        <th>WALET BALANCE</th>
                                                        <th>LAST VISIT</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <div class="profile-img-div">
                                                                    <img src="" alt="" class="rounded-circle">
                                                                </div>
                                                            </td>
                                                            <td>123</td>
                                                            <td>Client</td>
                                                            <td>23</td>
                                                            <td>address</td>
                                                            <td>+92 3001234567</td>
                                                            <td>$2300</td>
                                                            <td>1 hour ago</td>
                                                            <td class="action">
                                                                <a href=""><i class="mdi mdi-pencil-box-outline"></i></a>
                                                                <a href="" class="ml-2"><i class="mdi mdi-delete"></i> </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <div class="profile-img-div">
                                                                    <img src="" alt="" class="rounded-circle">
                                                                </div>
                                                            </td>
                                                            <td>123</td>
                                                            <td>Mubashar Mustafa</td>
                                                            <td>23</td>
                                                            <td>Sahiwal Pubjab Pakistan </td>
                                                            <td>+92 3001234567</td>
                                                            <td>$2300</td>
                                                            <td>1 hour ago</td>
                                                            <td class="action">
                                                                <a href=""><i class="mdi mdi-pencil-box-outline"></i></a>
                                                                <a href="" class="ml-2"><i class="mdi mdi-delete"></i> </a>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>                                                
                                            </div><!--end tab-pane-->

                                            <div class="tab-pane fade" id="profile-activities">
                                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                    <tr>
                                                        <th>Sr No.</th>
                                                        <th>PROFILE</th>
                                                        <th>CLIENT'S ID</th>
                                                        <th>NAME</th>
                                                        <th>AGE</th>
                                                        <th>ADDRESS</th>
                                                        <th>PHONE</th>
                                                        <th>WALET BALANCE</th>
                                                        <th>LAST VISIT</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <div class="profile-img-div">
                                                                    <img src="" alt="" class="rounded-circle">
                                                                </div>
                                                            </td>
                                                            <td>123</td>
                                                            <td>Client</td>
                                                            <td>23</td>
                                                            <td>address</td>
                                                            <td>+92 3001234567</td>
                                                            <td>$2300</td>
                                                            <td>1 hour ago</td>
                                                            <td class="action">
                                                                <a href=""><i class="mdi mdi-pencil-box-outline"></i></a>
                                                                <a href="" class="ml-2"><i class="mdi mdi-delete"></i> </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <div class="profile-img-div">
                                                                    <img src="" alt="" class="rounded-circle">
                                                                </div>
                                                            </td>
                                                            <td>123</td>
                                                            <td>Mubashar Mustafa</td>
                                                            <td>23</td>
                                                            <td>Sahiwal Pubjab Pakistan </td>
                                                            <td>+92 3001234567</td>
                                                            <td>$2300</td>
                                                            <td>1 hour ago</td>
                                                            <td class="action">
                                                                <a href=""><i class="mdi mdi-pencil-box-outline"></i></a>
                                                                <a href="" class="ml-2"><i class="mdi mdi-delete"></i> </a>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table> 
                                            </div><!--end tab-pane-->

                                            <div class="tab-pane fade" id="profile-pro-stock">
                                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                    <tr>
                                                        <th>Sr No.</th>
                                                        <th>PROFILE</th>
                                                        <th>CLIENT'S ID</th>
                                                        <th>NAME</th>
                                                        <th>AGE</th>
                                                        <th>ADDRESS</th>
                                                        <th>PHONE</th>
                                                        <th>WALET BALANCE</th>
                                                        <th>LAST VISIT</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <div class="profile-img-div">
                                                                    <img src="" alt="" class="rounded-circle">
                                                                </div>
                                                            </td>
                                                            <td>123</td>
                                                            <td>Client</td>
                                                            <td>23</td>
                                                            <td>address</td>
                                                            <td>+92 3001234567</td>
                                                            <td>$2300</td>
                                                            <td>1 hour ago</td>
                                                            <td class="action">
                                                                <a href=""><i class="mdi mdi-pencil-box-outline"></i></a>
                                                                <a href="" class="ml-2"><i class="mdi mdi-delete"></i> </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <div class="profile-img-div">
                                                                    <img src="" alt="" class="rounded-circle">
                                                                </div>
                                                            </td>
                                                            <td>123</td>
                                                            <td>Mubashar Mustafa</td>
                                                            <td>23</td>
                                                            <td>Sahiwal Pubjab Pakistan </td>
                                                            <td>+92 3001234567</td>
                                                            <td>$2300</td>
                                                            <td>1 hour ago</td>
                                                            <td class="action">
                                                                <a href=""><i class="mdi mdi-pencil-box-outline"></i></a>
                                                                <a href="" class="ml-2"><i class="mdi mdi-delete"></i> </a>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table> 
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
     

    @endsection
      

      @section("scriptlinks") 

        <!-- Required datatable js -->
        <script src="admin/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="admin/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="admin/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="admin/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="admin/assets/plugins/datatables/jszip.min.js"></script>
        <script src="admin/assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="admin/assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="admin/assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="admin/assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="admin/assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="admin/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="admin/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
        <script src="admin/assets/pages/jquery.datatable.init.js"></script>

        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>

    </body>
</html>
@endsection

@section('script_code')

@endsection
