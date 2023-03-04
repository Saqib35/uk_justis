<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class header_and_footer extends Model
{
    use HasFactory;
    public $table="header_and_footer";


    protected $fillable = [
        'time_office',
        'email_office',
        'address_office',
        'phone',
        'logo',
        'description_footer',
        'facebook_link',
        'twitter_link',
        'whatapp_link',
        'linkdin_link',
        'design_by',
        
      
    ];


}
