@extends('client.layouts.master')

@section('header_style')
    <title>Justice Call</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by themesbrand" name="description" />
    <meta content="Mannatthemes" name="author" />
    <link href="{{asset('admin/assets/plugins/ticker/jquery.jConveyorTicker.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
    <style>
        #map {
            height: 100%;
            width: 100%;
            margin: 0px;
            padding: 0px
        }
    </style>
@endsection


@section('main_content') 
        {{-- @include('client.layouts.header')--}}
        <x-client-dashboard-header-component pagename="Profile Professional"/>
        
        <div class="page-wrapper">
            <div class="page-wrapper-inner">

                <!-- Left Sidenav -->
                {{-- @include('client.includes.sidebar') --}}
                <x-client-dashboard-sidebar-component />
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
                                                    <h4 class="mt-0 header-title">Professional's Profile</h4>
                                                    <p class="text-muted mb-4 font-13">Welcome to JUSTISCALL</p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end f_profile-->             
                                    </div><!--end card-body-->                                    
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="profile-tabContent">
                                            <div class="tab-pane fade  show active" id="profile-settings">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h4 class="mt-0 header-title">About Professionals</h4>
                                                    </div>
                                                    
                                                    <div class="col-lg-12">
                                                        <div class="row border rounded pt-3 pb-5">
                                                            <div class="col-sm-3 col-xs-12 mt-3">
                                                                <div class="profile-image-div">
                                                                    <img src="{{asset($pro[0]->profile_img)}}" alt="" style="max-width:180px">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12 mt-3">
                                                                <div class="col-sm-12">
                                                                    <h4>{{$pro[0]->first_name}} {{$pro[0]->last_name}}</h4>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <b><label>{{$pro_category_name}}</label></b>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <label><i class="mdi mdi-star"></i> (5/5)</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <label>
                                                                        <i class="mdi mdi-map-marker"></i>
                                                                        {{$pro[0]->address}}
                                                                    </label>
                                                                </div>
                                                                <div class="col-sm-12 mt-4">
                                                                    <button class="btn-cancel form-control py-1">
                                                                        Add to favourite
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-2 col-xs-12 mt-3"></div>
                                                            <div class="col-sm-3 col-xs-12 mt-3">
                                                                <div class="col-sm-12">
                                                                    <h4>Payment Accepted</h4>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <b><label></label></b>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <label>
                                                                    {{ $pro[0]->cash=="on"?"Cash, ":""}}    
                                                                    {{ $pro[0]->credit_card=="on"?"Credit Card, ":""}}    
                                                                    {{ $pro[0]->check=="on"?"Check, ":""}}    
                                                                    {{ $pro[0]->wire_transfer=="on"?"Wire Transfert, ":""}}
                                                                    </label>
                                                                </div>
                                                                <div class="col-sm-12 mt-4">
                                                                    <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn-cancel form-control py-1 text-white">
                                                                        Book Appointment
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div> <!--end col-->                                          
                                            </div><!--end row-->
                                        </div><!--end tab-pane-->
                                    </div>  <!--end tab-content-->                                                                              
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->




                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Booking</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group col-sm-12 col-xs-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar"></i></span>
                                                        </div>
                                                        <input type="date" class="form-control" id="date" name="date">
                                                    </div>                                  
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group col-sm-12 col-xs-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-clock font-16"></i></span>
                                                        </div>
                                                        <input type="time" class="form-control" id="time" name="time">
                                                    </div>                                  
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body profile-nav"> 
                                        <div class="nav flex-column nav-pills" id="profile-tab" aria-orientation="vertical">
                                            <a class="nav-link active" id="profile-dash-tab" data-toggle="pill" href="#profile-dash" aria-selected="true">Overview</a>
                                            <a class="nav-link" id="profile-activities-tab" data-toggle="pill" href="#profile-activities" aria-selected="false">Location</a>
                                            <a class="nav-link" id="profile-activities-tab" data-toggle="pill" href="#profile-setting" aria-selected="false">Reviews</a>
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
                                                <p>{{$pro[0]->cashprofile_description!=null?$pro[0]->cashprofile_description:"No Profile Description"}}</p>

                                                <h4 class="header-title mt-1">Services</h4>
                                                <p>
                                                    <ul>
                                                        @foreach($pro_sub_categories as $sub_category)
                                                            <li>{{$sub_category->name}}</li>
                                                        @endforeach                                                       
                                                    </ul>
                                                </p>
                                                <h4 class="header-title mt-1">Specializations</h4>
                                                <p>
                                                    <ul>
                                                        <li>{{$pro_category_name}}</li>
                                                    </ul>
                                                </p>
                                                <h4 class="header-title mt-1">Country</h4>
                                                <p>
                                                    <ul>
                                                        <li>{{$country_name}}</li>
                                                    </ul>
                                                </p>
                                            </div><!--end tab-pane-->

                                            <div class="tab-pane fade" id="profile-activities">
                                                <h4 class="header-title mt-0 mb-4">Location</h4>
                                                <div class="row">
                                                <div class="col-sm-6 col-xs-12 mt-3">

                                                    <div class="col-sm-12">
                                                        <h4>{{$pro[0]->first_name}} {{$pro[0]->last_name}}</h4>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <b><label>{{$pro_category_name}}</label></b>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label><i class="mdi mdi-star"></i> (5/5)</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label>
                                                            <i class="mdi mdi-map-marker"></i>
                                                            {{$pro[0]->address}}
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label>
                                                            Postal Code: {{$pro[0]->post_code}}
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12 mt-3">
                                                    <div id="map"></div>
                                                </div>
                                                </div>
                                            </div><!--end tab-pane-->

                                            <div class="tab-pane fade" id="profile-setting">
                                                <h4 class="header-title mt-0 mb-4 text-center">Show All Feedback (0)</h4>

                                            </div><!--end tab-pane-->

                                            <div class="tab-pane fade" id="profile-pro-stock">
                                                <h4 class="header-title mt-0">Todays Availability :-</h4>
                                                <span class="border mx-2 p-2 rounded">
                                                   {{$today_availablity}}</span>
                                                <h4 class="header-title mt-3">Pro Availability :-</h4>
                                                <p>
                                                    @if($pro[0]->monday=="on")
                                                        <b>Monday</b><br>
                                                        {{$pro[0]->monday_start_time}} - {{$pro[0]->monday_end_time}} <br>
                                                    @endif

                                                    @if($pro[0]->tuesday=="on")
                                                        <b>Tuesday</b><br>
                                                        {{$pro[0]->tuesday_start_time}} - {{$pro[0]->tuesday_end_time}} <br>
                                                    @endif

                                                    @if($pro[0]->wednesday=="on")
                                                        <b>Wednesday</b><br>
                                                        {{$pro[0]->wednesday_start_time}} - {{$pro[0]->wednesday_end_time}}<br>
                                                    @endif

                                                    @if($pro[0]->thursday=="on")
                                                        <b>Thursday</b><br>
                                                        {{$pro[0]->thursday_start_time}} - {{$pro[0]->thursday_end_time}}<br>
                                                    @endif

                                                    @if($pro[0]->friday=="on")
                                                        <b>Friday</b><br>
                                                        {{$pro[0]->friday_start_time}} - {{$pro[0]->friday_end_time}}<br>
                                                    @endif

                                                    @if($pro[0]->saturday=="on")
                                                        <b>Saturday</b><br>
                                                        {{$pro[0]->saturday_start_time}} - {{$pro[0]->saturday_end_time}}<br>
                                                    @endif

                                                    @if($pro[0]->sunday=="on")
                                                        <b>Sunday</b><br>
                                                        {{$pro[0]->sunday_start_time}} - {{$pro[0]->sunday_end_time}}<br>
                                                    @endif
                                                </p>
                                                
                                            </div><!--end tab-pen-->

                                        </div>  <!--end tab-content-->                                                                              
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->



                         <div class="row mt-5 pt-4">
                            <div class="col-lg-12">
                                <div class="card">
                                    <x-client-dashboard-footer-component />                                                                    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->




                    </div><!--end row-->
                </div><!-- container -->

                <!-- end page content -->
            </div>
            <!--end page-wrapper-inner -->
        </div>
        <!-- end page-wrapper -->
@endsection


@section('scriptlinks')
        <script src="{{asset('admin/assets/plugins/moment/moment.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
        <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
        <script src="https://apexcharts.com/samples/assets/series1000.js"></script>
        <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
        <script src="{{asset('admin/assets/plugins/dropify/js/dropify.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/ticker/jquery.jConveyorTicker.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/peity-chart/jquery.peity.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/chartjs/chart.min.js')}}"></script>
        <script src="{{asset('admin/assets/pages/jquery.profile.init.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRJ9NKLuz1a30NakDmyGExaq8c7c9YrBk"></script>

@endsection

@section('script_code')
<script>
    function initMap() {
  var coordinates = {
    lat: {{$pro[0]->latitude}},
    lng: {{$pro[0]->longitude}}
  };
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 14,
    center: coordinates,
    scrollwheel: false
  });
  var measle = new google.maps.Marker({
    position: coordinates,
    map: map,
    icon: {
      url: "https://maps.gstatic.com/intl/en_us/mapfiles/markers2/measle.png",
      size: new google.maps.Size(7, 7),
      anchor: new google.maps.Point(3.8, 3.8)
    }
  });
  var marker = new google.maps.Marker({
    position: coordinates,
    map: map,
    icon: {
      url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png",
      labelOrigin: new google.maps.Point(75, 32),
      size: new google.maps.Size(32, 32),
      anchor: new google.maps.Point(16, 32)
    },
    label: {
      text: "{{$pro[0]->first_name}} {{$pro[0]->last_name}}",
      color: "#C70E20",
      fontWeight: "bold"
    }
  });
}
google.maps.event.addDomListener(window, "load", initMap);
</script>
@endsection