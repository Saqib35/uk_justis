<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message_Groups extends Model
{
    use HasFactory;
    public $table="message_groups";


 
    protected $fillable = [
        'group_id',
        'sender_id',
        'receiver_id',
        'last_message'
    ];
    
}
