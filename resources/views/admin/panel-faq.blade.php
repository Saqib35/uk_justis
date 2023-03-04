@extends('admin.layouts.master')
@section('header_style')
<title>justiscall - Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description" />
<meta content="" name="author" />


<style>
    .form-input img {
        display:none;
    }
    #file-ip-1-preview, #file-ip-11-preview{
        height: auto;
        width: 100%;
    }
    .days{
        margin-bottom: 20px;
    }
    .form-control[readonly] {
        background-color: transparent !important;
    }
    .btn-submit {
        background-image: linear-gradient(180deg,#2b2b48 0%,#224858 50%);
        color: #fff;
    }
    @media  screen and (min-width: 320px) and (max-width: 1199px) {
        .days b{
            display: block !important;
        }
    }

    @media  screen and (min-width: 320px) and (max-width: 424px) {
        .days input{
            width: 80px;
        }
    }
    @media  screen and (min-width: 320px) and (max-width: 374px) {
        .wed{
            padding: 0px 0px;
        }
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
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Justice Call</h4>  
                                        <P class="mt-0 text-muted mb-4">Welcome to admin Panel</P> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                            <div class="card">
                                    <div class="card-body">            
                                                
                                        <form method="post" action="{{ url('add_Faq') }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <label>Question</label>   
                                         <input type="text" required="" name="question" class="form-control">
                                         <label>Answer</label>   
                                         <input type="text" name="answer"  required="" class="form-control">
                                         
                                        <div class="row">
                                            <div class="col-sm-9 col-xs-12"></div>                  
                                            <div class="col-sm-3 col-xs-12 mt-4">
                                                <button class="btn-submit form-control" type="submit">
                                                    Add Faq
                                                </button>
                                            </div>
                                        </div>    
                                    </form> 
                                              
                                    </div><!--end card-body-->
                                </div>
                            </div><!--end col-->
                          <div class="col-lg-12">

                                 <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">All FAQS</h4>
                                        
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>SR NO</th>
                                                <th>Question</th>
                                                <th>Answer</th>
                                                <th>ACTION</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $a=1
                                                @endphp
                                               
                                                @foreach ($faq as $faq)
                                                <tr>
                                                    <td>{{ $a++  }}</td>
                                                    <td>{{ $faq['question']  }}</td>
                                                    <td>{{ $faq['answer']  }}</td>
                                                    <td class="action">
                                                        <a href="admin-faq_del/{{ $faq['id'] }}" class="ml-2"><i class="mdi mdi-delete"></i> </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                

                                            </tbody>
                                        </table>        
                                    </div>
                                </div>
                           </div>
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

        <!-- Plugins js -->
        <script src="admin/assets/plugins/moment/moment.js"></script>
        <script src="admin/assets/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="admin/assets/plugins/timepicker/tempusdominus-bootstrap-4.js"></script>
        <script src="admin/assets/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
        <script src="admin/assets/plugins/clockpicker/jquery-clockpicker.min.js"></script>
        <script src="admin/assets/plugins/colorpicker/jquery-asColor.js"></script>
        <script src="admin/assets/plugins/colorpicker/jquery-asGradient.js"></script>
        <script src="admin/assets/plugins/colorpicker/jquery-asColorPicker.min.js"></script>
        <script src="admin/assets/plugins/select2/select2.min.js"></script>

        <script src="admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

        <script src="admin/assets/pages/jquery.clock-img.init.js"></script>
        <script src="admin/assets/pages/jquery.forms-advanced.js"></script>


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
swal("success", "Added Successfully", "success");
</script>

@endif   


@if(Session::has('Del'))

<script>
swal("success", "Deleted Successfully", "success");
</script>

@endif   

@endsection
