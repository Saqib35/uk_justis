@extends('admin.layouts.master')
@section('header_style')
<title>justiscall - Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description" />
<meta content="" name="author" />
<meta name="csrf-token" content="{{ csrf_token() }}" />

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
                                            @foreach ($chat_lists as $chat_listss)


                                                @if($chat_listss->sender_id==Auth::user()->id)
                                                
                                                    @php
                                                    $id=$chat_listss->receiver_id
                                                    @endphp   
                                                            
                                                @else
                                                  
                                                   @php
                                                   $id=$chat_listss->sender_id  
                                                   @endphp
                                                
                                                @endif
                                                
                                                @php
                                                $user_img= \App\Models\User::where('id',$id)->get();
                                                @endphp 
                                                @if (count($user_img))
                                              
                                             <a href="{{ url('show-conversation/'.$chat_listss->group_id.'/'.$id) }}" class="media new-message">
                                                <div class="media-left">
                                                  
                                                    <img src="{{ url($user_img[0]->profile_img) }}" alt="user" class="rounded-circle thumb-lg">
                                                        
                                                
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div class="d-inline-block">
                                                   
                                                        <h6>{{ $user_img[0]->first_name.' '.$user_img[0]->last_name  }}</h6>
                                                      
                                                        <p>{{ $chat_listss->last_message  }}</p>
                                                    </div>
                                                    <div>
                                                        <span>{{ $chat_listss->created_at }} </span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a> <!--end media-->    
                                              @endif
                                              
                                            @endforeach
                                                                               
                                        </div><!--end general chat-->
                                    </div><!--end tab-content-->
                                </div><!--end chat-box-left -->
                                @if(isset($conversation))
                                <div class="chat-box-right">
                                   
                                    <div class="chat-header">
                                        <a href="" class="media">
                                            <div class="media-left">
                                                <img src="{{ url($sender_details[0]->profile_img) }}" alt="user" class="rounded-circle thumb-md">
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div>
                                                    <h6 class="mb-1 mt-0"></h6>
                                                  
                                                </div>
                                            </div><!-- end media-body -->
                                        </a><!--end media-->   
                                        <div class="chat-features">
                                            <div class="d-none d-sm-inline-block">
                                                <!-- <a href=""><i class="fas fa-phone"></i></a>
                                                <a href=""><i class="fas fa-video"></i></a>
                                                 -->
                                                <a href="{{  url('del-conversation/'.$conversation[0]->group_id) }}"><i class="fas fa-trash-alt"></i></a>
                                                                                                   
                                            </div>
                                        </div><!-- end chat-features -->
                                    </div><!-- end chat-header -->
                                    <div class="chat-body">
                                        <div class="chat-detail slimscroll" id="slimscroll" >
                                      

                                            @foreach ($conversation as $conversations)
                                                
                                          
                                            @if ($conversations['sender_id']==Auth::user()->id)
                                            <div class="media mb-4">                                                        
                                                <div class="media-body reverse">
                                                    <div class="chat-msg">
                                                        <p>{{  $conversations['message']  }}<br>
                                                        <small style="font-size:10px">{{ $conversations['created_at']  }}</small></p>
                                                        @if (!is_null($conversations['file']))
                                                        <br>
                                                           <a href="{{ url($conversations['file'])  }}" ><img src="{{ url($conversations['file'])  }}" class="mt-3" width="100px" height="130px" style="border-radius:30px"></a>
                                                        @endif
                                                    </div>
                                                 
                                                </div><!--end media-body--> 
                                                <div class="media-img">
                                                    <img src="{{ url(Auth::user()->profile_img)  }}" alt="user" class="rounded-circle thumb-md">
                                                </div>
                                            </div>
                                            
                                            <!--end media--> 
                                              
                                            @else

                                            <div class="media">
                                                <div class="media-img  mb-4">
                                                    <img src="{{ url($sender_details[0]->profile_img) }}" alt="user" class="rounded-circle thumb-md">
                                                </div>
                                                <div class="media-body">
                                                    <div class="chat-msg">
                                                        <p>{{  $conversations['message']  }}<br>
                                                        <small style="font-size:10px">{{ $conversations['created_at']  }}</small>
                                                        
                                                        </p>
                                                        @if (!is_null($conversations['file']))
                                                        <br>
                                                           <a href="{{ url($conversations['file'])  }}" ><img src="{{ url($conversations['file'])  }}" class="mt-3" width="100px" height="130px" style="border-radius:30px"></a>
                                                        @endif
                                                        
                                                    </div>
                                                </div><!--end media-body--> 
                                            </div> <!--end media--> 
                                          
                                            @endif
                                         @endforeach
                                          
                                          


                                            
                                        </div>  <!-- end chat-detail -->                                               
                                    </div><!-- end chat-body -->
                                    <form action="" method="" id="submit_form">
                                    <div class="chat-footer">
                                        <div class="row">                                                    
                                            <div class="col-12 col-md-9">
                                                <span class="chat-admin"><img src="{{ url(Auth::user()->profile_img) }}" alt="user" class="rounded-circle thumb-sm"></span>
                                                
                                                <input type="hidden" class="form-control" name="receiver_id" value="{{  $sender_details[0]->id }}">
                                                <input type="text" class="form-control" id="message" name="message" placeholder="Type something here...">
                                                <input type="file" class="d-none"  id="img" name="logo">
                                                  
                                                
                                            </div><!-- col-8 -->
                                            <div class="col-3 text-right">
                                            <div class="d-none d-sm-inline-block chat-features">
                                                  <label for="img"><i class="fas fa-paperclip"></i><label>
                                                    <button class="btn btn-success ml-3" type="submit">Send</button>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end chat-footer -->
                                    </form>
                                </div><!--end chat-box-right --> 
                                @endif 
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

$(document).ready(function(){
    //Uplaod Image
    $("#submit_form").on("submit", function(e){
      e.preventDefault();


          var formData = new FormData(this);
        
        
               $.ajaxSetup({
                    headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                

            $.ajax({
            url : "{!!URL::to('send-message')!!}",
            type : "POST",
          
            data : formData,
            contentType : false,
            processData: false,
            success: function(data){
                
                $final=data.split("-");
                updateMessage($final[0],$final[1]);
            },
             error:function()
            {
             ///  alert("error");
            }
            
            });
        



        });

    
});

function updateMessage(id,receiver_id)
{

    $.ajax({
        type:'get',
        url:'{!!URL::to('get-updated-message')!!}',
        data:{'id':id,'receiver_id':receiver_id},
        success:function(data)
        {
            
            $('#message').val('');
            $('#slimscroll').html(data);
            scrollToBottom();

        },
        error:function()
        {
        ///   alert("error");
        }

    });


}



function newChatAdd(id)
{

    alert(id);
}


function scrollToBottom() {

    const messages = document.getElementById('slimscroll');
     messages.scrollTop = messages.scrollHeight;
 
}

scrollToBottom();

</script>

@endsection
