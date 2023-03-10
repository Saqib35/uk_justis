<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
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
}
