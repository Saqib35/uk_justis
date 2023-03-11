<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    use HasFactory;


    protected $fillable = [
        'group_id',
        'sender_id',
        'receiver_id',
        'message',
        'file',
        'seen'
    ];
    
}
