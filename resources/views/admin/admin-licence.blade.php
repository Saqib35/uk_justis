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
    .btn-submit, .btn-cancel{
        background-image: linear-gradient(180deg,#2b2b48 0%,#224858 50%);
        color: #fff;
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
                                        <h4 class="header-title mt-0">Licence Management</h4>
                                        <p class="text-muted mb-4 font-13">
                                            Welcome to JUSTISCALL 
                                        </p>
                                        <div class="row">

                                            <div class="col-md-2 mb-3">
                                                <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                                                        <option disabled selected>Subscription Type</option>
                                                        <option value="free">Free</option>
                                                        <option value="paid">Paid</option>
                                                        <option value="un-subscribes">Un Subscribes</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                                                        <option disabled selected>Validity</option>
                                                        <option value="1year">Bellow 1 Year</option>
                                                        <option value="2year">Bellow 2 Year</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                                                        <option disabled selected>Expires in </option>
                                                        <option value="today">Today</option>
                                                        <option value="tomorrow">Tomorrow</option>
                                                        <option value="week">Week</option>
                                                    </optgroup>
                                                </select>
                                            </div>


                                            <div class="col-md-2 mb-3 ">
                                                <input type="text" class="form-control" name="defaultconfig" id="defaultconfig" placeholder="Enter Pro Name" />
                                                
                                            </div>

                                            

                                            <div class="col-md-2 mb-3"></div>
                                            <div class="col-md-2 mb-3">
                                                <input type="submit" name="" class="btn-submit form-control" value="Filter">
                                            </div>
                                                                                           
                                        </div>
                                    </div>
                                </div>                                
                            </div> <!-- end col -->
                        </div> <!-- end row --> 
        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Sl NO</th>
                                                <th>PRO NAME</th>
                                                <th>SUBSCRIPTION TYPE</th>
                                                <th>VALIDITY</th>
                                                <th>DURATION</th>
                                                <th>COST</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $a=1
                                                @endphp
                                                @foreach ($active_subcription as $active_subcriptions)
                                                <tr>
                                                    <td>{{  $a++  }}</td>
                                                    <td>

                                                    @php
                                                    $pro_name= \App\Models\User::where('id',$active_subcriptions['pro_id'])->get();
                                                    @endphp 
                                                    
                                                    @if(count($pro_name))
                                                    {{   $pro_name[0]->first_name.' '.$pro_name[0]->last_name  }}
                                                    @else
                                                    Plan may be delete
                                                    @endif
                                                    
                                                    </td>
                                                    <td>
                                                    
                                                    @php
                                                    $plans_details= \App\Models\Admin\Add_Subscription::where('id',$active_subcriptions['plan_id_link'])->get();
                                                    @endphp 
                                                    
                                                    @if(count($plans_details))
                                                    {{   $plans_details[0]->plan_name }}
                                                    @else
                                                    Plan may be delete
                                                    @endif
                                                        
                                                 

                                                    </td>
                                                    <td>{{ $active_subcriptions['start_date']   }}</td>
                                                    <td>{{ $active_subcriptions['plan_interval']   }}</td>
                                                    <td>{{ $active_subcriptions['plan_amount']   }}</td>

                                                    <td>
                                                        @if (is_null($active_subcriptions['expired_date']))
                                                        <button class="btn-success rounded">Active</button>
                                                        @else
                                                        <button class="btn-success rounded bg-danger">Unactive</button>
                                                            
                                                        @endif
                                                    
                                                    </td>
                                                    
                                                    <td class="action">
                                                          @if (is_null($active_subcriptions['expired_date']))
                                                          <a href="{{ url('delete-subscription-pro-admin/'.$active_subcriptions['id'].'/'.$active_subcriptions['subscription_id']) }}" class="btn-success rounded bg-danger">click me to cancel</a>
                                                           
                                                        @else
                                                        <a  class="ml-2">Cancelled</a>
                                                            
                                                        @endif
                                                    
                                                       
                                                    </td>
                                                </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

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


@endsection


@section('script_code')

@endsection
