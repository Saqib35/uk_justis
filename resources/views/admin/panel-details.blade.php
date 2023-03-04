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
        width: 60%;
        margin: 5% 0% 0% 20%;
    }
    .days{
        margin-bottom: 20px;
    }
    .form-control[readonly] {
        background-color: transparent !important;
    }
    @media  screen and (min-width: 320px) and (max-width: 1199px) {
        .days b{
            display: block !important;
        }
    }
    .btn-submit {
        background-image: linear-gradient(180deg,#2b2b48 0%,#224858 50%);
        color: #fff;
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
                                        
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form action="{{ url('admin-details_update') }}" method="post" enctype="multipart/form-data">
                                                <div class="card">
                                                    <div class="card-body"> 
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                        <h4 class="mt-0 header-title mb-3">Header & Footer</h4>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                       
                                                                        <h6 class=" input-title mt-lg-3">Time office</h6>
                                                                        <input type="text" class="form-control" value="{{ $header_and_footer[0]->time_office  }}"  placeholder="time"  name="time_office" id="defaultconfig" />
                                                                    </div>
                                        
                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">Email office</h6>
                                                                        <input type="email" name="email_office"  value="{{ $header_and_footer[0]->email_office  }}" placeholder="email"  class="form-control" id="thresholdconfig" />
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">Phone</h6>
                                                                        <input class="form-control" id="" value="{{ $header_and_footer[0]->phone  }}" name="phone" placeholder="phone" data-dtp="dtp_hIAc">
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">Facebook</h6>
                                                                        <input type="text" name="facebook_link"  value="{{ $header_and_footer[0]->facebook_link  }}" class="form-control" id="thresholdconfig" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">Twitter</h6>
                                                                        <input type="text" name="twitter_link" value="{{ $header_and_footer[0]->twitter_link  }}" class="form-control" id="thresholdconfig" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">Whats App</h6>
                                                                        <input type="text" name="whatapp_link" value="{{ $header_and_footer[0]->whatapp_link  }}" class="form-control" id="thresholdconfig" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">Linked In</h6>
                                                                        <input type="text" name="linkdin_link" value="{{ $header_and_footer[0]->linkdin_link  }}" class="form-control" id="thresholdconfig" />
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">Address office</h6>
                                                                        <textarea class="form-control"rows="3" name="address_office">{{ $header_and_footer[0]->address_office  }}</textarea>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">Footer Content</h6>
                                                                        <textarea class="form-control"  rows="3" name="description_footer">{{ $header_and_footer[0]->description_footer  }}</textarea>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">Desgin By</h6>
                                                                        <textarea class="form-control" rows="3"  name="design_by">{{ $header_and_footer[0]->design_by  }}</textarea>
                                                                    
                                                                    </div>
                                                                    
                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">Logo</h6>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <input type="file" id="file-ip-1" class="form-control" accept="image/*" onchange="showPreview(event);" name="logo">
                                                                            <div class="preview">
                                                                              <img id="file-ip-1-preview">
                                                                            </div>
                                                                        </div>                                    
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6 class=" input-title mt-lg-3">Current Logo</h6>
                                                                        
                                                                            <img src="{{ $header_and_footer[0]->logo  }}" width="100px">                            
                                                                    </div>
                                                                    <div class="col-sm-10">
                                                                       
                                                                    </div>
                                                                   
                                                                    <div class="col-sm-2 col-xs-12">
                                                                        <button class="btn-submit form-control">
                                                                            Update
                                                                        </button>
                                                                    </div>

                                    
                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>                                        
                                            </div> <!-- end col -->
                                        </div> <!-- end row --> 
                                         
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
swal("success", "Updated", "success");
</script>

@endif   

@endsection