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
                <div class="page-content d-noe">
                    <div class="container-fluid"> 
                        
        
                        <div class="row">
                            <div class="col-md-11">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">All Subscriptions</h4>
                                        <p class="text-muted mb-4 font-13">
                                            Welcome to JUSTISCALL
                                        </p>
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>SR NO</th>
                                                <th>plan name</th>
                                                <th>stripe product ID</th>
                                                <th>Price one</th>
                                                <th>stripe price ID one</th>
                                                <th>duration one</th>
                                                <th>Price two</th>
                                                <th>stripe price ID two</th>
                                                <th>duration two</th>
                                                <th>Price three</th>
                                                <th>stripe price ID three</th>
                                                <th>duration three</th>
                                                <th>Price four</th>
                                                <th>stripe price ID four</th>
                                                <th>duration four</th>            
                                                <th>Subcription include one</th>
                                                <th>Subcription include two</th>
                                                <th>Subcription include three</th>
                                                <th>Subcription include four</th>
                                                <th>Subcription include five</th>
                                                <th>Subcription include six</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>   

                                            </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                 $a=1 
                                                @endphp
                                                @foreach ($subscription as $subscription)
                                                    
                                                <tr>
                                                    <td>{{  $a++ }}</td>
                                                    <td>{{ $subscription['plan_name'] }}</td>
                                                    <td>{{ $subscription['stripe_product_id'] }}</td>
                                                    <td>{{ $subscription['price_one'] }}</td>
                                                    <td>{{ $subscription['stripe_price_id_one'] }}</td>
                                                    <td>{{ $subscription['duration_one'] }}</td>
                                                    <td>{{ $subscription['price_two'] }}</td>
                                                    <td>{{ $subscription['stripe_price_id_two'] }}</td>
                                                    <td>{{ $subscription['duration_two'] }}</td>
                                                    <td>{{ $subscription['price_three'] }}</td>
                                                    <td>{{ $subscription['stripe_price_id_three'] }}</td>
                                                    <td>{{ $subscription['duration_three'] }}</td>
                                                    <td>{{ $subscription['price_four'] }}</td>
                                                    <td>{{ $subscription['stripe_price_id_four'] }}</td>
                                                    <td>{{ $subscription['duration_four'] }}</td>
                                                    <td>{{ $subscription['include_one'] }}</td>
                                                    <td>{{ $subscription['include_two'] }}</td>
                                                    <td>{{ $subscription['include_three'] }}</td>
                                                    <td>{{ $subscription['include_four'] }}</td>
                                                    <td>{{ $subscription['include_five'] }}</td>
                                                    <td>{{ $subscription['include_six'] }}</td>
                                                    <td>
                                                     
                                                     @if ($subscription['status']=='on')
                                                      <button class="btn-success rounded">
                                                        <a href="{{ url('activeSubcription/'.$subscription['id'].'/'.$subscription['status']) }}" class="ml-2">Enable</a>

                                                        </button>
                                                     @else
                                                     <button class="btn-danger rounded">
                                                       <a href="{{ url('activeSubcription/'.$subscription['id'].'/'.$subscription['status']) }}" class="ml-2">disable</a>
                                                        
                                                     </button>
                                                     @endif
                                                    </td>
                                                    <td class="action">
                                                        <a href="{{ url('delSubcription/'.$subscription['id']) }}" class="ml-2"><i class="mdi mdi-delete"></i> </a>

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


@if(Session::has('status'))

<script>
swal("success", "Updated", "success");
</script>

@endif  

@if(Session::has('Del'))

<script>
swal("success", "Deleted Successfully", "success");
</script>

@endif   

@endsection
