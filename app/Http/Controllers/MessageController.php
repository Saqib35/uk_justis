<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Message_Groups;
use App\Models\messages;

use DB;

class MessageController extends Controller
{
    function FindPro(REQUEST $req)
    {
        
        
        $search=$req->search;
        $query = User::query();
        $query = $query->where(DB::raw("concat(first_name, ' ', last_name)"), 'LIKE','%'.$search.'%');  
        $query= $query->where('user_type' ,'!=' ,'admin');  
        $pro_result=$query->get();
      
        if(count($pro_result))
        {

          
            $Data="";

            foreach($pro_result as $pro_results)
            {
                
                $Data.='<div class="col-md-4 border p-3 text-center"><img src="admin/assets/images/users/user-1.jpg"  width="80px" height="80px" style="border-radius:50%;"><p class="pt-3">'.$pro_results['first_name'].' '.$pro_results['last_name'].'</p><p class="pt-1">Lawyer</p><button class="btn btn-success" onclick="newChatAdd('.$pro_results['id'].')">Chat</button></div>';
            }

           return $Data;

        }else{


            return  "<div style='text-align:center'><center>Not Found</center></div>";

        }

    }

    public function AdminChatShow()
    {

       
        $sender_id=Auth::user()->id;
        $chat_lists = DB::select("SELECT * FROM  `message_groups`  WHERE `sender_id`='{$sender_id}' OR   `receiver_id`='{$sender_id}'");
      
        return view("admin.app-chat",['chat_lists'=>$chat_lists]);
    }

    public function AdminChatShowConversation(REQUEST $req)
    {

      
        $sender_id=Auth::user()->id;
        $chat_lists = DB::select("SELECT * FROM  `message_groups`  WHERE `sender_id`='{$sender_id}' OR   `receiver_id`='{$sender_id}'");
      
        $conversation=messages::where('group_id',$req->id)->get();
       
         $sender_details=User::where('id',$req->receiver_id)->get();


        return view("admin.app-chat",['chat_lists'=>$chat_lists,'conversation'=>$conversation,'sender_details'=>$sender_details]);
    }


    public function SendMessage(REQUEST $req)
    {
   
        
        if($req->hasFile('logo'))
        {
         
          $dir = 'assets/messages/';
          $extension = strtolower($req['logo']->getClientOriginalExtension()); // get image extension
          $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
          $req['logo']->move($dir, $fileName);
          $logoss=$req['logo'] ="{$dir}{$fileName}";
  
          $receiver_id=$req->receiver_id;
          $sender_id=Auth::user()->id;
 
           $check_group = DB::select("SELECT * FROM  `message_groups`  WHERE (`sender_id`='{$sender_id}' AND `receiver_id`='{$receiver_id}') OR (`sender_id`='{$receiver_id}' AND `receiver_id`='{$sender_id}')");
                     
             if(count($check_group))
             {
 
                $random=$check_group[0]->group_id;
 
 
                  Message_Groups::where('id', $req->id)
                 ->update([
                     'last_message' => $req->message
                  ]);
            
                  messages::create([
                     'group_id'=>$random,
                     'sender_id'=>$sender_id,
                     'receiver_id'=>$receiver_id,
                     'message'=>$req->message,
                     'seen'=>'no',
                     'file'=>$logoss
                     
                 
                 ]);
 
 
 
 
 
             }else{
 
                  $random=rand();
 
 
                  Message_Groups::create([
                     'group_id'=>$random,
                     'sender_id'=>$sender_id,
                     'receiver_id'=>$receiver_id,
                     'last_message'=>$req->message,
                 
                 ]);
 
                 
                 messages::create([
                     'group_id'=>$random,
                     'sender_id'=>$sender_id,
                     'receiver_id'=>$receiver_id,
                     'message'=>$req->message,
                     'seen'=>'no',
                     'file'=>$logoss

                 
                 ]);
 
              }
 
 

  
        }else{
       

         $receiver_id=$req->receiver_id;
         $sender_id=Auth::user()->id;

          $check_group = DB::select("SELECT * FROM  `message_groups`  WHERE (`sender_id`='{$sender_id}' AND `receiver_id`='{$receiver_id}') OR (`sender_id`='{$receiver_id}' AND `receiver_id`='{$sender_id}')");
                    
            if(count($check_group))
            {

              
                $random=$check_group[0]->group_id;

                 Message_Groups::where('id', $req->id)
                ->update([
                    'last_message' => $req->message
                 ]);
           
                 messages::create([
                    'group_id'=>$random,
                    'sender_id'=>$sender_id,
                    'receiver_id'=>$receiver_id,
                    'message'=>$req->message,
                    'seen'=>'no'
                
                ]);





            }else{

                 $random=rand();


                 Message_Groups::create([
                    'group_id'=>$random,
                    'sender_id'=>$sender_id,
                    'receiver_id'=>$receiver_id,
                    'last_message'=>$req->message,
                
                ]);

                
                messages::create([
                    'group_id'=>$random,
                    'sender_id'=>$sender_id,
                    'receiver_id'=>$receiver_id,
                    'message'=>$req->message,
                    'seen'=>'no'
                
                ]);

             }


      

        }
        return $random."-".$receiver_id;
    }


  public function GetUpdatedMessage(REQUEST $req)
  {


     
    $sender_id=Auth::user()->id;
    $chat_lists = DB::select("SELECT * FROM  `message_groups`  WHERE `sender_id`='{$sender_id}' OR   `receiver_id`='{$sender_id}'");
  
     $conversation=messages::where('group_id',$req->id)->get();
   
     $sender_details=User::where('id',$req->receiver_id)->get();

     $data="";

   foreach($conversation as $conversations)
   {
      if($conversations['sender_id']==Auth::user()->id)
      {

      $data.='<div class="media mb-4"><div class="media-body reverse"><div class="chat-msg"><p>'.$conversations['message'].'<br><small style="font-size:10px">'.$conversations['created_at'].'</small></p>';
      if(!is_null($conversations['file']))
      {

      $data.='<br><a href="" ><img src="'.asset($conversations["file"]).'" class="mt-3" width="100px" height="130px" style="border-radius:30px"></a>';
      }
      $data.='</div></div><div class="media-img"><img src="'.asset(auth()->user()->profile_img).'" alt="user" class="rounded-circle thumb-md"></div></div>';



      }else{


        $data.='<div class="media mb-4"><div class="media-body "><div class="chat-msg"><p>'.$conversations['message'].'<br><small style="font-size:10px">'.$conversations['created_at'].'</small></p>';
        if(!is_null($conversations['file']))
        {
  
        $data.='<br><a href="" ><img src="'.asset($conversations["file"]).'" class="mt-3" width="100px" height="130px" style="border-radius:30px"></a>';
        }
        $data.='</div></div><div class="media-img"><img src="'.asset(auth()->user()->profile_img).'" alt="user" class="rounded-circle thumb-md"></div></div>';
  
  

      }

   }
  


    return $data;
  }




  public function delConversation(REQUEST $req)
  {


    Message_Groups::where('group_id', $req->group_id)->delete();
    messages::where('group_id', $req->group_id)->delete();
    
    
    return redirect('app-chat');


  }

}
