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
                            <div class="col-md-11">
                                <div class="card">
                                    <div class="card-body">
         
                                        <h4 class="mt-0 header-title">Sub Categories List</h4>
                                        <p class="text-muted mb-4 font-13">
                                            Welcome to JUSTISCALL
                                        </p>
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>SL NO</th>
                                                <th>category name</th>
                                                <th>sub category name in english</th>
                                                <th>sub category name in french</th>
                                                <th>sub category name in german</th>
                                                <th>sub category name in italian</th>
                                                <th>sub category name in russain</th>
                                                <th>sub category name in spanish</th>
                                                <th>status</th>
                                                <th>ACTION</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                               @php
                                                $a=1
                                               @endphp    
                                               
                                               @foreach ($Pro_Sub_Category as $Pro_Sub_Category)   
                                                <tr>
                                                    <td>{{  $a++ }}  </td>
                                                    <td>
                                                    @php
                                                    $Pro_Category= \App\Models\Pro_Category::where('id', $Pro_Sub_Category['category_id'])->get();
                                                    @endphp   
                                                       @if(count($Pro_Category) >0)
                                                          {{ $Pro_Category[0]->name }}
                                                        @endif
                                                    </td>
                                                    <td>{{ $Pro_Sub_Category['name'] }}</td>
                                                    <td>{{ $Pro_Sub_Category['name_french'] }}</td>
                                                    <td>{{ $Pro_Sub_Category['name_german'] }}</td>
                                                    <td>{{ $Pro_Sub_Category['name_italian'] }}</td>
                                                    <td>{{ $Pro_Sub_Category['name_russian'] }}</td>
                                                    <td>{{ $Pro_Sub_Category['name_spanish'] }}</td>
                                                    <td>
                                                    @if ($Pro_Sub_Category['status']==1)
                                                      <button class="btn-success rounded">
                                                        <a href="{{ url('active_sub_category/'.$Pro_Sub_Category['id'].'/'.$Pro_Sub_Category['status']) }}" class="ml-2">Enable</a>

                                                        </button>
                                                     @else
                                                     <button class="btn-danger rounded">
                                                       <a href="{{ url('active_sub_category/'.$Pro_Sub_Category['id'].'/'.$Pro_Sub_Category['status']) }}" class="ml-2">disable</a>
                                                        
                                                     </button>
                                                     
                                                     @endif
                                                    </td>
                                                    
                                                    <td class="action">
                                                    <a href="{{ url('del_sub_category/'.$Pro_Sub_Category['id']) }}" class="ml-2"><i class="mdi mdi-delete"></i> </a>

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
swal("success", "Updated Successfully", "success");
</script>

@endif   


@if(Session::has('Del'))

<script>
swal("success", "Deleted Successfully", "success");
</script>

@endif  
@endsection
