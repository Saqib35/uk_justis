@extends('admin.layouts.master')
@section('header_style')
<title>justiscall - Admin Show All Pro</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description" />
<meta content="CodeHub" name="author" />
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
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 27px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
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
                                        <h4 class="mt-0 header-title">All Pro</h4>
                                        <p class="text-muted mb-4 font-13">
                                            Welcome to JUSTISCALL
                                        </p>        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->


                        <div class="row">
                            <div class="col-lg-11">
                                <div class="card">
                                    <div class="card-body profile-nav"> 
                                        <div class="nav flex-column nav-pills" id="profile-tab" aria-orientation="vetical">
                                            <a class="nav-link active" id="profile-dash-tab" data-toggle="pill" href="#profile-dash" aria-selected="true">All</a>
                                            <a class="nav-link" id="profile-activities-tab" data-toggle="pill" href="#profile-activities" aria-selected="false">Today</a>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->

                            </div><!--end col-->

                            <div class="col-lg-11">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="profile-tabContent">
                                            <div class="tab-pane fade show active" id="profile-dash">
                                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                    <tr>
                                                        <th>Sr No.</th>
                                                        <th>Profile</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Status</th>
                                                        <th>Age</th>
                                                        <th>Address</th>
                                                        <th>Date of Birth</th>
                                                        <th>Phone</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $a=1
                                                        @endphp
                                                        @foreach ($pro as $pr)
                                                        <tr>
                                                            <td>{{ $a++ }}</td>
                                                            <td>
                                                                <div class="profile-img-div">
                                                                    <img src="{{ asset($pr['profile_img'])}}" alt="" class="rounded-circle">
                                                                </div>
                                                            </td>
                                                            <td>{{ $pr['first_name']." ".$pr['last_name']  }}</td>
                                                            <td>{{ $pr['email'] }}</td>
                                                            
                                                            <td>
                                                                
                                                                <label class="switch">
                                                                    <input type="checkbox"  onchange="IsPaid({{ $pr['id']  }},this.value)" @if ($pr['Is_piad']=='on') value="off"  {{  'checked' }} @else value="on"  @endif>
                                                                    <span class="slider round"></span>  
                                                                </label>

                                                            </td>
                                                            <td>{{ calculate_age($pr['date_of_birth']) }}</td>
                                                            <td>{{ $pr['address'] }}</td>
                                                            <td>{{ $pr['date_of_birth'] }}</td>
                                                            <td>{{ $pr['mobile'] }}</td>
                                                            <td class="action">
                                                               
                                                                <a href="{{  url('all-pro/edit/'.$pr['id']) }}"><i class="mdi mdi-pencil-box-outline"></i></a>

                                                                <a href="{{ url('all-pro/delete/'. $pr['id']) }}" class="ml-2"><i class="mdi mdi-delete"></i> </a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>                                                
                                            </div><!--end tab-pane-->

                                            <div class="tab-pane fade" id="profile-activities">
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                    <tr>
                                                        <th>Sr No.</th>
                                                        <th>Profile</th>
                                                        <th>Name</th>
                                                        <th>Age</th>
                                                        <th>Address</th>
                                                        <th>Date of Birth</th>
                                                        <th>Phone</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $a=1
                                                        @endphp
                                                        @foreach ($pro_today as $pr_today)
                                                        <tr>
                                                            <td>{{ $a++ }}</td>
                                                            <td>
                                                                <div class="profile-img-div">
                                                                    <img src="{{ $pr_today['profile_img'] }}" alt="" class="rounded-circle">
                                                                </div>
                                                            </td>
                                                            <td>{{ $pr_today['first_name']." ".$pr_today['last_name']  }}</td>
                                                            <td>{{ $pr_today['age'] }}</td>
                                                            <td>{{ $pr_today['address'] }}</td>
                                                            <td>{{ $pr_today['date_of_birth'] }}</td>
                                                            <td>{{ $pr_today['mobile'] }}</td>
                                                            <td class="action">
                                                                <a href="">chart</a>
                                                                <a href="{{  url('pro-edit/'.$pr_today['id']) }}"><i class="mdi mdi-pencil-box-outline"></i></a>
                                                                <a href="{{ url('all-pro/'. $pr_today['id']) }}" class="ml-2"><i class="mdi mdi-delete"></i> </a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>  
                                            </div><!--end tab-pane-->

                                     

                                            
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
        <script src="{{ asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{ asset('admin/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{ asset('admin/assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('admin/assets/pages/jquery.datatable.init.js')}}"></script>

        <!-- App js -->

    </body>
</html>
@endsection

@section('script_code')

@if(Session::has('Del'))

<script>
swal("status", "Client Deleted Successfully", "success");
</script>

@endif  


@if(Session::has('statusPaid'))

<script>
swal("status", "Status changed Successfully", "success");
</script>

@endif  

<script>

    function IsPaid(id,status)
    {

        $.ajax({
        type:'get',
        url:'{!!URL::to('chnage-pro-status-ispaid')!!}',
        data:{'id':id,'status':status},
        success:function(data)
        {
             window.location.reload();
        },
        error:function()
        {
        }
        });
    }

</script>



@endsection
