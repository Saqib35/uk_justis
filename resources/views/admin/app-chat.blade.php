@extends('admin.layouts.master')
@section('header_style')
<title>justiscall - Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description" />
<meta content="" name="author" />

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
                                        <h4 class="header-title mt-0">Chat</h4>
                                        <p class="text-muted mb-4 font-13">
                                            Welcome to JUSTISCALL 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                     <div class="card-body bootstrap-select-1">
                                        <div class="row" id="showPro">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="chat-box-left">
                                    <div class="chat-search">
                                        <div class="form-group"> 
                                            <div class="input-group">                                                
                                                <input type="text" id="chat-search" name="chat-search" class="form-control" placeholder="Search" >
                                                <span class="input-group-append">
                                                    <button type="button" onclick="searchPro()" class="btn btn-primary shadow-none"><i class="fas fa-search"></i></button>
                                                </span>
                                            </div>                                                    
                                        </div>
                                    </div>
                                    

                                    <div class="tab-content chat-list slimscroll" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="general_chat">
                                            <a href="" class="media new-message">
                                                <div class="media-left">
                                                    <img src="admin/assets/images/users/user-1.jpg" alt="user" class="rounded-circle thumb-lg">
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div class="d-inline-block">
                                                        <h6>Daniel Madsen</h6>
                                                        <p>Good morning! Congratulations Friend...</p>
                                                    </div>
                                                    <div>
                                                        <span>20 Feb</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a> <!--end media-->    
                                            <a href="" class="media new-message">
                                                <div class="media-left">
                                                    <img src="admin/assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-lg">
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Robert Jefferson</h6>
                                                        <p>Congratulations Friend...</p>
                                                    </div>
                                                    <div>
                                                        <span>20 Feb</span>
                                                        
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a> <!--end media-->
                                                                                    
                                        </div><!--end general chat-->
                                    </div><!--end tab-content-->
                                </div><!--end chat-box-left -->

                                <div class="chat-box-right">
                                    <div class="chat-header">
                                        <a href="" class="media">
                                            <div class="media-left">
                                                <img src="admin/assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-md">
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div>
                                                    <h6 class="mb-1 mt-0">Mary Schneider</h6>
                                                  
                                                </div>
                                            </div><!-- end media-body -->
                                        </a><!--end media-->   
                                        <div class="chat-features">
                                            <div class="d-none d-sm-inline-block">
                                                <a href=""><i class="fas fa-phone"></i></a>
                                                <a href=""><i class="fas fa-video"></i></a>
                                                <a href=""><i class="fas fa-trash-alt"></i></a>
                                                                                                   
                                            </div>
                                        </div><!-- end chat-features -->
                                    </div><!-- end chat-header -->
                                    <div class="chat-body ">
                                        <div class="chat-detail slimscroll">
                                          
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="admin/assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-md">
                                                </div>
                                                <div class="media-body">
                                                    <div class="chat-msg">
                                                        <p>Good Morning !</p>
                                                    </div>
                                                </div><!--end media-body--> 
                                            </div> <!--end media--> 
    
                                            <div class="media">                                                        
                                                <div class="media-body reverse">
                                                    <div class="chat-msg">
                                                        <p>Good Morning !</p>
                                                    </div>
                                                 
                                                </div><!--end media-body--> 
                                                <div class="media-img">
                                                    <img src="admin/assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-md">
                                                </div>
                                            </div> <!--end media--> 


                                            
                                        </div>  <!-- end chat-detail -->                                               
                                    </div><!-- end chat-body -->
                                    <div class="chat-footer">
                                        <div class="row">                                                    
                                            <div class="col-12 col-md-9">
                                                <span class="chat-admin"><img src="admin/assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-sm"></span>
                                                
                                                <input type="text" class="form-control" placeholder="Type something here...">
                                            </div><!-- col-8 -->
                                            <div class="col-3 text-right">
                                                <div class="d-none d-sm-inline-block chat-features">
                                                    <a href="">Send</a>
                                                    
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end chat-footer -->
                                </div><!--end chat-box-right --> 
                            </div> <!-- end col -->                           
                        </div><!-- end row -->
                    </div><!-- container -->

                    <footer class="footer text-center text-sm-left">
                        &copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                    </footer>
                </div>
                <!-- end page content -->
            </div>
        </div>
        
@endsection
      

 @section("scriptlinks")

        <!-- jQuery  -->
        <script src="admin/assets/js/jquery.min.js"></script>
        <script src="admin/assets/js/bootstrap.bundle.min.js"></script>
        <script src="admin/assets/js/metisMenu.min.js"></script>
        <script src="admin/assets/js/waves.min.js"></script>
        <script src="admin/assets/js/jquery.slimscroll.min.js"></script>

@endsection

@section('script_code')


<script>

function searchPro()
{

    var search=$('#chat-search').val();

    $.ajax({
        type:'get',
        url:'{!!URL::to('find-chat-search')!!}',
        data:{'search':search},
        success:function(data)
        {
            if(data!="")
            {
             $('#showPro').html(data);
            }
        },
        error:function()
        {
        alert("error");
        }
        });

}


</script>

@endsection
