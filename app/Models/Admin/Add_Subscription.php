<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Add_Subscription extends Model
{
    use HasFactory;
     public $table="add_subscription_plans";
     
    protected $fillable = [
        'plan_name',
        'type',
        'price',
        'stripe_price_id',
        'stripe_product_id',
        'duration',
        'include_one',
        'include_two',
        'include_three',
        'include_four',
        'include_five',
        'include_six',
        'status',
        
    ];

}
