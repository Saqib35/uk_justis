@extends('admin.layouts.master')
@section('header_style')
<title>justiscall - Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description" />
<meta content="" name="author" />

<style>
    .btn-submit {
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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">            
                                        <h4 class="mt-0 header-title">Justice Call</h4>
                                        <p class="text-muted mb-4">Welcome to admin Panel</p>        
                                    </div>
                                </div>
                            </div>
                        </div>

         
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">            
                                        <h4 class="mt-0 header-title">Privacy Policy</h4>
                                                
                                        <form method="post" action="{{ url('admin-privacy-policy_update') }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <input type="hidden" name="id" value="{{ $privacy_policys[0]->id }}" />
                                           
                                        <textarea id="elm1" name="area"><?=  $privacy_policys[0]->content;  ?></textarea>
                                        <div class="row">
                                            <div class="col-sm-9 col-xs-12"></div>                  
                                            <div class="col-sm-3 col-xs-12 mt-4">
                                                <button class="btn-submit form-control" type="submit">
                                                    Update
                                                </button>
                                            </div>
                                        </div>      
                                    </form> 
                                            
                                    </div><!--end card-body-->
                                </div><!--end card-->
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
       
    
        <!--Wysiwig js-->
        <script src="admin/assets/plugins/tinymce/tinymce.min.js"></script>
        <script src="admin/assets/pages/jquery.form-editor.init.js"></script>

@endsection

@section('script_code')


@if(Session::has('status'))

<script>
swal("success", "Updated", "success");
</script>

@endif                       
 

@endsection