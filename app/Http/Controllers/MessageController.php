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
        $pro_result=$query->get();
      
        if(count($pro_result))
        {

          
            $Data="";

            foreach($pro_result as $pro_results)
            {
                
                $Data.='<div class="col-md-4 border p-3 text-center"><img src="admin/assets/images/users/user-1.jpg"  width="80px" height="80px" style="border-radius:50%;"><p class="pt-3">Muhammad Saqib</p><p class="pt-1">Lawyer</p><button class="btn btn-success">Chat</button></div>';
            }

           return $Data;

        }else{


            return  "<div style='text-align:center'><center>Not Found</center></div>";

        }

    }

    public function AdminChatShow()
    {

        // $cards = DB::select("SELECT * FROM  `message_groups`  WHERE (`sender_id`='{$sender_id}' AND `receiver_id`='{$receiver_id}') OR (`sender_id`='{$receiver_id}' AND `receiver_id`='{$sender_id}')");
        // print_r($cards);
        $sender_id=Auth::user()->id;
        $chat_lists = DB::select("SELECT * FROM  `message_groups`  WHERE `sender_id`='{$sender_id}' OR   `receiver_id`='{$sender_id}'");
      
        return view("admin.app-chat",['chat_lists'=>$chat_lists]);
    }

    public function AdminChatShowConversation(REQUEST $req)
    {

      
        $sender_id=Auth::user()->id;
        $chat_lists = DB::select("SELECT * FROM  `message_groups`  WHERE `sender_id`='{$sender_id}' OR   `receiver_id`='{$sender_id}'");
      
        $conversation=messages::where('group_id',$req->id)->get();


        return view("admin.app-chat",['chat_lists'=>$chat_lists,'conversation'=>$conversation]);
    }
}
