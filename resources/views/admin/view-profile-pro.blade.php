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
                                                            <img src="{{ url($pro[0]->profile_img)}}" width="130px" height="130px" alt="" class="rounded-circle">
                                                            <span class="fro-profile_main-pic-change">
                                                                <i class="fas fa-camera"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->

                                                <div class="col-lg-4 col-xs-12 mb-3 mb-lg-0">
                                                    <div class="fro_profile_user-detail">
                                                        <h5 class="fro_user-name">{{  $pro[0]->first_name.' '.$pro[0]->last_name }}</h5>
                                                        <p class="mb-0 fro_user-name-post">Lawyer</p>
                                                    </div>
                                                </div><!--end col-->
                                                

                                                <div class="col-lg-4 col-xs-12 mb-3 mb-lg-0">
                                                    <div class="fro_profile_user-detail">
                                                        <h5 class="fro_user-name">ID Card Number</h5>
                                                        <p class="mb-0 fro_user-name-post">{{  $pro[0]->id_card_number }}</p>
                                                    </div> 
                                                </div>
                                                
                                            </div><!--end row-->
                                        </div><!--end f_profile-->                                                                                
                                    </div><!--end card-body-->

                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="id-card-img">
                                        <img src="{{ url($pro[0]->id_card_img)}}" alt="">
                                    </div>
                                </div><!--end card-->

                                <div class="card">
                                    <div class="card-body profile-nav"> 
                                        <div class="nav flex-column nav-pills" id="profile-tab" aria-orientation="vertical">
                                            <a class="nav-link active" id="profile-dash-tab" data-toggle="pill" href="#profile-dash" aria-selected="true">Overview</a>
                                            <a class="nav-link" id="profile-activities-tab" data-toggle="pill" href="#profile-activities" aria-selected="false">Reviews</a>
                                            <a class="nav-link d-flex justify-content-between align-items-center" id="profile-pro-stock-tab" data-toggle="pill" href="#profile-pro-stock" aria-selected="false">Availability</a>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->

                            </div><!--end col-->

                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="profile-tabContent">
                                            <div class="tab-pane fade show active" id="profile-dash">
                                                <h4 class="header-title mt-0 mb-4">Overview</h4>
                                                <h4 class="header-title mt-0">Profile Description</h4>
                                                <p>{{  $pro[0]->profile_description }}</p>
                                                <h4 class="header-title mt-1">Specializations (category)</h4>

                                                @php
                                                $Pro_Category= \App\Models\Pro_Category::where("id", $pro[0]->category_id)->get();
                                                @endphp 
                                                
                                                <p>{{ $Pro_Category[0]->name }}</p>
                                                <h4 class="header-title mt-1">Services (Sub category)</h4>

                                                @php
                                                $sub_cate=json_decode($pro[0]->sub_category_id,true)
                                                @endphp 
                                                @foreach ($sub_cate as $sub_cate)
                                                @php
                                                $Pro_Category_sub= \App\Models\Pro_Sub_Category::where("id", $sub_cate)->get();
                                                @endphp   
                                               
                                                <span>{{ $Pro_Category_sub[0]->name }}</span>
                                                @endforeach
                                                
                                                <h4 class="header-title mt-3">Location</h4>
                                                <p>{{  $pro[0]->address   }}<br>{{  $pro[0]->city   }}</p>
                                            </div><!--end tab-pane-->

                                            <div class="tab-pane fade" id="profile-activities">
                                                <h4 class="mt-0 header-title mb-3">Reviews</h4>
                                            </div><!--end tab-pane-->

                                            <div class="tab-pane fade" id="profile-pro-stock">
                                                <h4 class="header-title mt-0">Todays Availability :-</h4>
                                                 <?php  
                                                 $d=new DateTime();
                                                 $new_date=Str::lower($d->format('l'));           
                                                 ?>
                                                 
                                                 @if ($pro[0]->monday=='on' && 'monday'==$new_date)

                                                 <span class="border mx-2 p-2 rounded">OPEN NOW</span>
                                                 <h4 class="header-title mt-3">Pro Availability :{{ $pro[0]->monday_start_time.' - '.$pro[0]->monday_end_time }}</h4>


                                                 @elseif($pro[0]->tuesday=='on' && 'tuesday'==$new_date)
                                                 
                                                 <span class="border mx-2 p-2 rounded">OPEN NOW</span>
                                                 <h4 class="header-title mt-3">Pro Availability : {{ $pro[0]->tuesday_start_time.' - '.$pro[0]->tuesday_end_time }}</h4>


                                                 @elseif($pro[0]->wednesday=='on' && 'wednesday'==$new_date)
                                                 
                                                 <span class="border mx-2 p-2 rounded">OPEN NOW</span>
                                                 <h4 class="header-title mt-3">Pro Availability :  {{ $pro[0]->wednesday_start_time.' - '.$pro[0]->wednesday_end_time }} </h4>


                                                 @elseif($pro[0]->thursday=='on' && 'thursday'==$new_date)
                                                 
                                                 <span class="border mx-2 p-2 rounded">OPEN NOW</span>
                                                 <h4 class="header-title mt-3">Pro Availability :    {{ $pro[0]->thursday_start_time.' - '.$pro[0]->thursday_end_time }}</h4>


                                                 @elseif($pro[0]->friday=='on' && 'friday'==$new_date)
                                                 
                                                 <span class="border mx-2 p-2 rounded">OPEN NOW</span>
                                                 <h4 class="header-title mt-3">Pro Availability :  {{ $pro[0]->friday_start_time.' - '.$pro[0]->friday_end_time }}</h4>


                                                 @elseif($pro[0]->saturday=='on' && 'saturday'==$new_date)
                                                 
                                                 <span class="border mx-2 p-2 rounded">OPEN NOW</span>
                                                 <h4 class="header-title mt-3">Pro Availability :{{ $pro[0]->saturday_start_time.' - '.$pro[0]->saturday_end_time }}</h4>


                                                 @elseif($pro[0]->sunday=='on' && 'sunday'==$new_date)
                                                 
                                                 <span class="border mx-2 p-2 rounded">OPEN NOW</span>
                                                 <h4 class="header-title mt-3">Pro Availability :{{ $pro[0]->sunday_start_time.' - '.$pro[0]->sunday_end_time }} </h4>
                                                 
                                                 @else

                                                    <span class="border mx-2 p-2 rounded">ClOSE NOW</span>
                                                                                                
                                                 @endif
                                                
                                                <p>
                                                    
                                                    @if ($pro[0]->monday=='on')
                                                     <b>Monday</b><br>
                                                     {{ $pro[0]->monday_start_time.' - '.$pro[0]->monday_end_time }} <br>
                                                    @endif

                                                    @if ($pro[0]->tuesday=='on')
                                                    <b>Tuesday</b><br>
                                                    {{ $pro[0]->tuesday_start_time.' - '.$pro[0]->tuesday_end_time }} <br>
                                                    @endif

                                                    @if ($pro[0]->wednesday=='on')
                                                    <b>Wednesday</b><br>
                                                    {{ $pro[0]->wednesday_start_time.' - '.$pro[0]->wednesday_end_time }} <br>
                                                    @endif

 
                                                    @if ($pro[0]->thursday=='on')
                                                    <b>Thursday</b><br>
                                                    {{ $pro[0]->thursday_start_time.' - '.$pro[0]->thursday_end_time }} <br>
                                                    @endif

                                                    @if ($pro[0]->friday=='on')
                                                    <b>friday</b><br>
                                                    {{ $pro[0]->friday_start_time.' - '.$pro[0]->friday_end_time }} <br>
                                                    @endif


                                                    @if ($pro[0]->saturday=='on')
                                                    <b>Saturday</b><br>
                                                    {{ $pro[0]->saturday_start_time.' - '.$pro[0]->saturday_end_time }} <br>
                                                    @endif


                                                    @if ($pro[0]->sunday=='on')
                                                    <b>Saturday</b><br>
                                                    {{ $pro[0]->sunday_start_time.' - '.$pro[0]->sunday_end_time }} <br>
                                                    @endif

                                                </p>
                                                       
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