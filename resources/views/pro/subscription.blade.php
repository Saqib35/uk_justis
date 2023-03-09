@extends('pro.layouts.master')

    @section('header_style')
        <title>PRO - Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by themesbrand" name="description" />
        <meta content="Mannatthemes" name="author" />
    @endsection

    @section('main_content')

    @include('pro.layouts.header')
    <div class="page-wrapper">
        <div class="page-wrapper-inner">
            <!-- Left Sidenav -->
            @include('pro.includes.sidebar')
            
                <!-- end left-sidenav-->

                <!-- Page Content-->
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body border-bottom">
                                        <div class="fro_profile">
                                            <div class="row">
                                                <div class="col-lg-4 mb-3 mb-lg-0">
                                                    <h4 class="mt-0 header-title">Subscription</h4>
                                                    <p class="text-muted mb-4 font-13">Welcome to JUSTISCALL</p>
                                                    <div class="row" style="display: none;">
                                                        <div class="col-5 align-item-center">
                                                            <canvas id="pro-doughnut" height="0" style="display: block; width: 0px; height: 0px;" class="chartjs-render-monitor" width="0"></canvas> 
                                                        </div>
                                                    </div> 
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end f_profile-->             
                                    </div><!--end card-body-->                                    
                                </div><!--end card-->
                            </div><!--end col-->
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body invoice-head"> 
                                        <div class="row">
                                            <h4 class="mt-0 header-title">Justiscall PRO</h4>
                                        </div> 
                                    </div><!--end card-body-->
                                    <div class="card-body">
                                        <div class="row">
                                            @if (count($pro_active_sub))
                                                
                                            
                                            @foreach ($pro_active_sub as  $pro_active_subs)
                                            <div class="col-md-12 border">
                                                <div class="">
                                                    <h6 class="mb-0">
                                                        <b>Start From : </b> 
                                                        <label> {{ $pro_active_subs['start_date']  }}</label>
                                                    </h6>
                                                    <h6>
                                                        <b>Expired To :</b>
                                                        <label> {{ $pro_active_subs['expired_date']  }} </label>
                                                    </h6>
                                                    
                                                    <h6 class="pt-2">
                                                        <b>Price :</b>
                                                        <label>€  {{ $pro_active_subs['plan_amount']  }} </label>
                                                    </h6>
                                                    @if (is_null($pro_active_subs['expired_date']))
                                                    <h6 class="pt-1">
                                                        <b>Status :</b>
                                                        <label> Active </label>
                                                    </h6>

                                                    <button class="btn btn-danger mb-3 ml-3"><a class="text-white" href="{{ url('delete-subscription/'.$pro_active_subs['id'].'/'.$pro_active_subs['subscription_id'] ) }}" >Cancel</a></buttun>
                                                    @else
                                                    
                                                    <h6 class="pt-1">
                                                        <b>Status :</b>
                                                        <label> Unactive </label>
                                                    </h6>
                                                    

                                                    @endif
                                                </div>
                                            </div>
                                            @endforeach
                                            @else
                                            <div class="col-md-12">
                                                <div class="text-center">
                                                    <h6 class="mb-0">
                                                        <b>Not Subcription Active</b> 
                                                    </h6>
                                                </div>
                                            </div>
                                            
                                            @endif
                                            
                                        </div>

                                    </div>
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
 @endsection
    @section('scriptlinks')
        <!-- jQuery  -->
        <script src="admin/assets/js/jquery.min.js"></script>
        <script src="admin/assets/js/bootstrap.bundle.min.js"></script>
        <script src="admin/assets/js/metisMenu.min.js"></script>
        <script src="admin/assets/js/waves.min.js"></script>
        <script src="admin/assets/js/jquery.slimscroll.min.js"></script>
  
      @endsection


@section('script_code')
@endsection