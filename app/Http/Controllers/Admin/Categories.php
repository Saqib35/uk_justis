<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pro_Category;

class Categories extends Controller
{
    public function categorieslist()
    {
       $Pro_Category=Pro_Category::get();
       return view("admin.categories-list",["Pro_Category"=>$Pro_Category]);
    }

    public function activeCategory(REQUEST $req)
    {
         if($req->status==1)
         {
            $status=0;

         }else{
           
             $status=1;
            
         }
           Pro_Category::where('id', $req->id)
          ->update([
              'status' => $status
           ]);


           return redirect()->back()->with('status','updated');
    }

    public function delCategory(REQUEST $req)
    {

        Pro_Category::where('id', $req->id)->delete();
        return redirect()->back()->with('Del','Deleted Successfully');
    }



}
