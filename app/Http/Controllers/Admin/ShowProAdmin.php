<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowProAdmin extends Controller
{
    public function ShowProAdmin()
    {
        return view("admin.lawyer-category");
    }
}
