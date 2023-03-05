<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UpdateProfile extends Controller
{
    public function ViewProfile()
    {
        return view("admin.view-profile");
    }

    public function ViewProfileUpdate()
    {

        dd("check");
    }
}
