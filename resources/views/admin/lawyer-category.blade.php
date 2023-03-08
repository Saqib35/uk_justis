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
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body bootstrap-select-1">
                                        <h4 class="header-title mt-0">Lawyer</h4>
                                        <p class="text-muted mb-4 font-13">
                                            Welcome to JUSTISCALL 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                           @if (count($pro))
                               
                           
                            @foreach ($pro as $pro)
                            <div class="col-md-4">
                                <div class="card  profile-card">
                                    <img src="{{ url($pro['profile_img']) }}" alt="" style="max-height:400px !important" class="img-fluid">                                       
                                    <div class="card-body pb-0">
                                        <div class="text-center pb-3">
                                            <h5>{{ $pro['first_name'].' '.$pro['last_name'] }}</h5>
                                            <p class="mb-2 font-12 text-muted"></i>
                                              
                                              @php
                                              $Pro_Category= \App\Models\Pro_Category::where("id", $pro['category_id'])->get();
                                              @endphp 

                                              {{ $Pro_Category[0]->name }}
                                            </p>
                                            <p class="mb-2 font-12 text-muted"></i>{{ $pro['gender'] }}</p>
                                            <a href="{{ url('view-profile-pro/'.$pro['id']) }}" class="btn btn-sm btn-success text-light mt-3">View Profile</a>
                                            <a class="btn btn-sm btn-info text-light mt-3">Edit Profile</a><br>
                                            <!-- <a class="btn btn-sm btn-primary text-light mt-3">Add Wallet</a> -->
                                            <a  href="{{ url('delete-pro/'.$pro['id']) }}" class="btn btn-sm btn-danger text-light mt-3">Delete</a>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            @endforeach
                            @else
                            
                            <div class="col-12 text-center"><h3>Not Found</h3></div>

                            @endif
                                

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

        <!-- jQuery  -->
        <script src="admin/assets/js/jquery.min.js"></script>
        <script src="admin/assets/js/bootstrap.bundle.min.js"></script>
        <script src="admin/assets/js/metisMenu.min.js"></script>
        <script src="admin/assets/js/waves.min.js"></script>
        <script src="admin/assets/js/jquery.slimscroll.min.js"></script>

        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>

@endsection

@section('script_code')

@if(Session::has('Del'))

<script>
swal("success", "Pro Deleted Successfully", "success");
</script>

@endif  


@endsection