@extends('admin.layouts.master')
@section('header_style')
<title>justiscall - Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description" />
<meta content="" name="author" />
     

<style>
    .fro_profile_user-detail{
        margin-left: 30px;
    }
    .id-card-img{
        height: 150px;
        width: 100%;
    }
    .id-card-img img{
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
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body bootstrap-select-1">
                                        <h4 class="header-title mt-0">View Profile</h4>
                                        <p class="text-muted mb-4 font-13">
                                            Welcome to JUSTISCALL 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body border-bottom">
                                        <div class="fro_profile">
                                            <div class="row">
                                                <div class="col-lg-3 col-xs-12 mb-3 mb-lg-0">
                                                    <div class="fro_profile-main">
                                                        <div class="fro_profile-main-pic">
                                                            <img src="{{ Auth::user()->profile_img }}" width="130px" alt="" class="rounded-circle">
                                                            <span class="fro-profile_main-pic-change">
                                                                <i class="fas fa-camera"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                                <form action="{{ url('view-profile-update') }}" method="post" enctype="multipart/form-data">
                                                 
                                                <div class="col-md-12 mb-3 mt-5">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" /> 
                                                        <h6 class=" input-title mt-0">Admin name</h6>
                                                        <input type="text" required="" value="{{  Auth::user()->last_name }}" class="form-control" name="last_name" id="defaultconfig" />
                                                  </div>
                                                    
                                                  <div class="col-md-12">
                                                    <h6 class=" input-title">Change pofile image</h6>
                                                    
                                                    <div class="input-group mb-3">
                                                        <input type="file" id="file-ip-1" class="form-control" accept="image/*" onchange="showPreview(event);" name="logo" >
                                                    </div>         
                                                 </div>
                                                 <div class="col-md-6">
                                                    <div class="preview">
                                                        <img id="file-ip-1-preview" width="200px">
                                                    </div>
                                                 </div> 
                                                <div class="col-md-12">
                                                    <button class="btn-submit form-control">
                                                        Update
                                                    </button>
                                                </div>
                                                
                                              </form> 
                                            </div><!--end row-->
                                        </div><!--end f_profile-->                                                                                
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

      

        <script src="admin/assets/plugins/moment/moment.js"></script>
        <script src="admin/assets/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
        <script src="https://apexcharts.com/samples/assets/series1000.js"></script>
        <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
        <script src="admin/assets/plugins/dropify/js/dropify.min.js"></script>
        <script src="admin/assets/plugins/ticker/jquery.jConveyorTicker.min.js"></script>
        <script src="admin/assets/plugins/peity-chart/jquery.peity.min.js"></script>
        <script src="admin/assets/plugins/chartjs/chart.min.js"></script>
        <script src="admin/assets/pages/jquery.profile.init.js"></script>


@endsection

@section('script_code')
<script type="text/javascript">
    function showPreview(event){
      if(event.target.files.length > 0){
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("file-ip-1-preview");
        preview.src = src;
        preview.style.display = "block";
      }
    }
</script>
@if(Session::has('status'))

<script>
swal("success", "Updated Successfully", "success");
</script>

@endif   

@endsection