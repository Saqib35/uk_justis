<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pro_Category extends Model
{
    use HasFactory;
    public $table="pro_categories";

    protected $fillable = [
        'name',
        'name_french',
        'name_german',
        'name_italian',
        'name_russian',
        'name_spanish',
        'category_type',
        'status',
      
    ];
}
