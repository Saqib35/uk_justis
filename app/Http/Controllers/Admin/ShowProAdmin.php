<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ShowProAdmin extends Controller
{
    public function ShowProAdmin(REQUEST $req)
    {

        $pro=User::where("category_id",$req->id)->where("user_type",'pro')->get();

        return view("admin.lawyer-category",['pro'=>$pro]);

    }

    public function DelProAdmin(REQUEST $req)
    {
        User::where('id', $req->id)->delete();
        return redirect()->back()->with('Del','Deleted Successfully');
        
    }
    public function ShowProProfile(REQUEST $req)
    {
        $pro=User::where("id",$req->id)->where("user_type",'pro')->get();
        return view("admin.view-profile-pro",["pro"=>$pro]);
    }
}
