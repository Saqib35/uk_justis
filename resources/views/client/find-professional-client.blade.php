@extends('client.layouts.master')

@section('header_style')
<title>Justice Call</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="A premium admin dashboard template by themesbrand" name="description" />
<meta content="Mannatthemes" name="author" />
<link href="{{asset('admin/assets/plugins/ticker/jquery.jConveyorTicker.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin/assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
@endsection


@section('main_content')
        {{-- @include('client.layouts.header')--}}
        <x-client-dashboard-header-component pagename="Find Professional"/>
        
        
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
                                                    <h4 class="mt-0 header-title">Find Professional Client</h4>
                                                    <p class="text-muted mb-4 font-13">Welcome to JUSTISCALL</p>
                                                    <div class="row" style="display: none;">
                                                        <div class="col-5 align-item-center">
                                                            <canvas id="pro-doughnut" height="180"></canvas> 
                                                        </div>
                                                    </div> 
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end f_profile-->             
                                    </div><!--end card-body-->                                    
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                        

                        @if(Session::has('search_result'))
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="profile-tabContent">
                                            <div class="tab-pane fade  show active" id="profile-settings">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h4 class="mt-0 header-title">All Professionals Result</h4>
                                                    </div>
                                                    
                                                    <div class="col-lg-12">
                                                        <div class="row border rounded">
                                                            <div class="col-sm-4 col-xs-12 mt-3">
                                                                <div class="profile-image-div">
                                                                    <img src="{{asset('admin/assets/images/users/user-1.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12 mt-3">
                                                                <div class="col-sm-12">
                                                                    <h4>Name</h4>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <b><label>Lawyer</label></b>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <label>5 Years Experiance</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <label><i class="mdi mdi-star"></i> (5/5)</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12 mt-3">
                                                                <div class="col-sm-12 col-xs-6">
                                                                    <label>
                                                                        <i class="mdi mdi-thumb-up-outline"></i>
                                                                        72% (0 votes)
                                                                    </label>
                                                                </div>
                                                                <div class="col-sm-12 col-xs-6">
                                                                    <label>
                                                                        <i class="mdi mdi-message-text-outline"></i>
                                                                        0 Feedback
                                                                    </label>
                                                                </div>
                                                                <div class="col-sm-12 col-xs-12">
                                                                    <label>
                                                                        <i class="mdi mdi-map-marker"></i>
                                                                        109 Bd Carnot, 06400 Cannes, France
                                                                        Postal Code: 06400
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 mt-3 bg-light py-3 my-2">
                                                                <div class="row">
                                                                    <div class="col-sm-3 col-xs-12">
                                                                        <button class="btn-cancel form-control">
                                                                            View Profile
                                                                        </button>
                                                                    </div>
                                                                    <div class="col-sm-6 col-xs-12"></div>
                                                                    <div class="col-sm-3 col-xs-12">
                                                                        <button class="btn-cancel form-control">
                                                                            Book Appointment
                                                                        </button>
                                                                    </div>
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
                        @else
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="profile-tabContent">
                                            <div class="tab-pane fade  show active" id="profile-settings">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <form class="form-horizontal form-material mb-0" action="" method="get">
                                                           
                                                            <div class="row">
                                                                <div class="col-sm-9 col-xs-12 mb-3">
                                                                    <div class="row">
                                                                        <div class="form-group col-sm-4 col-xs-12">
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-folder-multiple font-16"></i></span>
                                                                                </div>
                                                                                <select class="form-control" name="category_id" id="category-id">
                                                                                    <option selected disabled>Choose Category</option>
                                                                                    @foreach($pro_categories as $pro_category)
                                                                                        <option value="{{$pro_category->id}}">{{$pro_category->name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>                                
                                                                        </div>

                                                                        <div class="form-group col-sm-4 col-xs-12">
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-folder-multiple font-16"></i></span>
                                                                                </div>
                                                                                <select class="form-control" name="sub_category_id" id="sub-category-id">
                                                                                    <option selected disabled>Choose Sub Category</option>
                                                                                </select>

                                                                            </div>                                
                                                                        </div>

                                                                        <div class="form-group col-sm-4 col-xs-12">
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-folder-multiple font-16"></i></span>
                                                                                </div>
                                                                                <select class="form-control" name="country" id="country-id">
                                                                                    <option selected disabled>Choose Country</option>
                                                                                    @foreach($countries as $country)
                                                                                    <option value="{{$country->sortname}}">{{$country->name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>                                
                                                                        </div>
                                                                        <div class="form-group col-sm-4 col-xs-12">
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-folder-multiple font-16"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control" name="city" placeholder="City Name" maxlength="255">
                                                                            </div>                                
                                                                        </div>
                                                                        <div class="form-group col-sm-4 col-xs-12">
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-folder-multiple font-16"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control" name="pro_name" placeholder="Pro Name" maxlength="255">
                                                                            </div>                                
                                                                        </div>
                                                                        <div class="form-group col-sm-4 col-xs-12">
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-folder-multiple font-16"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
                                                                            </div>                                
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 col-xs-12 mb-3">
                                                                    <input type="submit" name="" class="btn-cancel form-control" value="Search">
                                                                </div>                   
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div> <!--end col-->                                          
                                            </div><!--end row-->
                                        </div><!--end tab-pane-->
                                    </div>  <!--end tab-content-->                                                                              
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        @endif
                    </div><!--end row-->
                    <x-client-dashboard-footer-component />
                </div><!-- container -->
                    
                </div>
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
@endsection

@section('script_code')
<script>
    // get pro categories
    $("#category-id").change(function(){
        var category_id = $(this).find(":selected").val();
        $.ajax({
            type:'get',
            url:'{!!URL::to('pro/getProSubCategoriesThroughProCategoryAjax')!!}',
            data:{'category_id':category_id},
            success:function(data)
            {
            $("#sub-category-id").html('');
            $("#sub-category-id").append(data);
            },
            error:function()
            {
            alert('error');
            }
        });
     });      
</script>
@endsection