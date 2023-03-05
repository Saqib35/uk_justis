<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pro_Category;
use App\Models\Pro_Sub_Category;


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

   public function addCategory(REQUEST $req)
   {

       Pro_Category::create([
        'name' => $req->name,
        'name_french' => $req->name_french,
        'name_german'=>$req->name_german,
        'name_italian' => $req->name_italian,
        'name_russian' => $req->name_russian,
        'name_spanish'=>$req->name_spanish,
        'category_type' => $req->category_type,
        'status'=>$req->status,
        ]);

        return redirect()->back()->with('status','Added');
   }

  public function SubCategoriesList()
  {
    $Pro_Sub_Category=Pro_Sub_Category::get();
    return view("admin.sub-categories-list",["Pro_Sub_Category"=>$Pro_Sub_Category]);
   
  }


   public function ShowCategoriesList()
   {
 
     $Pro_Category=Pro_Category::get();
     return view("admin.add-sub-categories",["Pro_Category"=>$Pro_Category]);
   
   }
 
  public function AddSubCategory(REQUEST $req)
  {
   

        Pro_Sub_Category::create([
        'category_id' => $req->category_id,
        'name_french' => $req->name_french,
        'name_german'=>$req->name_german,
        'name_italian' => $req->name_italian,
        'name_russian' => $req->name_russian,
        'name_spanish'=>$req->name_spanish,
        'name' => $req->name,
        'status'=>$req->status,
        ]);

        return redirect()->back()->with('status','Added');
  
  }

  
  public function activeSubCategory(REQUEST $req)
  {
       if($req->status==1)
       {
          $status=0;

       }else{
         
           $status=1;
          
       }
         Pro_Sub_Category::where('id', $req->id)
        ->update([
            'status' => $status
         ]);


         return redirect()->back()->with('status','updated');
  }

  public function delSubCategory(REQUEST $req)
  {

      Pro_Sub_Category::where('id', $req->id)->delete();
      return redirect()->back()->with('Del','Deleted Successfully');
  }

   
}
