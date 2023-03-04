@extends('client.layouts.main')
@section('main_content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>justice Call</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="admin/assets/images/favicon.ico">

        <!-- App css -->
        <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

  
    @include('client.layouts.header')
        
        <div class="page-wrapper">
            <div class="page-wrapper-inner">

                <!-- Left Sidenav -->
                  @include('client.includes.sidebar')
                <!-- end left-sidenav-->


           
                <!-- Page Content-->
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="chat-box-left">
                                    <div class="chat-search">
                                        <div class="form-group"> 
                                            <div class="input-group">                                                
                                                <input type="text" id="chat-search" name="chat-search" class="form-control" placeholder="Search">
                                                <span class="input-group-append">
                                                    <button type="button" class="btn btn-primary shadow-none"><i class="fas fa-search"></i></button>
                                                </span>
                                            </div>                                                    
                                        </div>
                                    </div><!--end chat-search-->

                                    <div class="tab-content chat-list slimscroll" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="general_chat">
                                            <a href="" class="media new-message">
                                                <div class="media-left">
                                                    <img src="admin/assets/images/users/user-1.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-success"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div class="d-inline-block">
                                                        <h6>Daniel Madsen</h6>
                                                        <p>Good morning! Congratulations Friend...</p>
                                                    </div>
                                                    <div>
                                                        <span>20 Feb</span>
                                                        <span>3</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a> <!--end media-->    
                                            <a href="" class="media new-message">
                                                <div class="media-left">
                                                    <img src="admin/assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-success"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Robert Jefferson</h6>
                                                        <p>Congratulations Friend...</p>
                                                    </div>
                                                    <div>
                                                        <span>20 Feb</span>
                                                        <span>1</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a> <!--end media-->
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <img src="admin/assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-danger"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Jesse Ross</h6>
                                                        <p>How are you Friend...</p>
                                                    </div>
                                                    <div>
                                                        <span>15 Feb</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a> <!--end media-->    
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <img src="admin/assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-danger"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Mary Schneider</h6>
                                                        <p>Have A Nice day...</p>
                                                    </div>
                                                    <div>
                                                        <span>14 Feb</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a> <!--end media-->
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <img src="admin/assets/images/users/user-5.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-success"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>David Herrmann</h6>
                                                        <p>Good morning! How are you?</p>
                                                    </div>
                                                    <div>
                                                        <span>10 Feb</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a>  <!--end media-->   
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <img src="admin/assets/images/users/user-6.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-danger"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Mary Hayes</h6>
                                                        <p>How are you Friend...</p>
                                                    </div>
                                                    <div>
                                                        <span>1 Feb</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a> <!--end media-->
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <img src="admin/assets/images/users/user-7.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-danger"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Rita Duarte</h6>
                                                        <p>Have A Nice day...</p>
                                                    </div>
                                                    <div>
                                                        <span>30 Jan</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a>   <!--end media-->  
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <img src="admin/assets/images/users/user-8.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-danger"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Dennis Wilson</h6>
                                                        <p>Good morning! How are you?</p>
                                                    </div>
                                                    <div>
                                                        <span>26 Jan</span>
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
                                                    <p class="mb-0">Last seen: 2 hours ago</p>
                                                </div>
                                            </div><!-- end media-body -->
                                        </a><!--end media-->   
                                        <div class="chat-features">
                                            <div class="d-none d-sm-inline-block">
                                                <a href=""><i class="fas fa-phone"></i></a>
                                                <a href=""><i class="fas fa-video"></i></a>
                                                <a href=""><i class="fas fa-trash-alt"></i></a>
                                                <a href=""><i class="fas fa-ellipsis-v"></i></a>                                                       
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
                                                    <div class="chat-msg">
                                                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                                                    </div>
                                                </div><!--end media-body--> 
                                            </div><!--end media-->  
    
                                            <div class="media">                                                        
                                                <div class="media-body reverse">
                                                    <div class="chat-msg">
                                                        <p>Good Morning !</p>
                                                    </div>
                                                    <div class="chat-msg">
                                                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                                                    </div>                                                            
                                                </div><!--end media-body--> 
                                                <div class="media-img">
                                                    <img src="admin/assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-md">
                                                </div>
                                            </div><!--end media-->  
    
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="admin/assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-md">
                                                </div>
                                                <div class="media-body">                                                            
                                                    <div class="chat-msg">
                                                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                                                    </div>
                                                </div><!--end media-body--> 
                                            </div><!--end media-->  
    
                                            <div class="media">                                                        
                                                <div class="media-body reverse">
                                                    <div class="chat-msg">
                                                        <p>Good Morning !</p>
                                                    </div>
                                                    <div class="chat-msg">
                                                        <p>It is a long established fact that a reader will be distracted by 
                                                            the readable content of a page when looking at its layout. 
                                                            The point of using Lorem Ipsum is that it has a more-or-less normal 
                                                            distribution of letters, as opposed to using 'Content here.
                                                        </p>
                                                    </div>                                                            
                                                </div><!--end media-body--> 
                                                <div class="media-img">
                                                    <img src="admin/assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-md">
                                                </div>
                                            </div><!--end media-->  
    
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="admin/assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-md">
                                                </div>
                                                <div class="media-body">
                                                    <div class="chat-msg">
                                                        <p>Good Morning !</p>
                                                    </div>
                                                    <div class="chat-msg">
                                                        <p>It is a long established fact that a reader will be distracted by 
                                                            the readable content of a page when looking at its layout. 
                                                            The point of using Lorem Ipsum is that it has a more-or-less normal 
                                                            distribution of letters, as opposed to using 'Content here.
                                                        </p>
                                                    </div>
                                                    <div class="chat-msg">
                                                        <p>Ok</p>
                                                    </div>
                                                </div><!--end media-body--> 
                                            </div> <!--end media--> 
    
                                            <div class="media">                                                        
                                                <div class="media-body reverse">
                                                    <div class="chat-msg">
                                                        <p>Good Morning !</p>
                                                    </div>
                                                    <div class="chat-msg">
                                                        <p>There are many variations of passages of Lorem Ipsum available.</p>
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
                                                    <a href=""><i class="fas fa-camera"></i></a>
                                                    <a href=""><i class="fas fa-paperclip"></i></a>
                                                    <a href=""><i class="fas fa-microphone"></i></a>
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
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="admin/assets/js/jquery.min.js"></script>
        <script src="admin/assets/js/bootstrap.bundle.min.js"></script>
        <script src="admin/assets/js/metisMenu.min.js"></script>
        <script src="admin/assets/js/waves.min.js"></script>
        <script src="admin/assets/js/jquery.slimscroll.min.js"></script>

        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>

    </body>
</html>
@endsection