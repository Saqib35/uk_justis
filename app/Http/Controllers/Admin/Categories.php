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
}
