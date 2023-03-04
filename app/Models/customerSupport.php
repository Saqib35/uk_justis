<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerSupport extends Model
{
    use  HasFactory;

  

    protected $fillable = [
        'name',
        'email',
        'phone',
        'note',
        'subject'
        
    ];


}
