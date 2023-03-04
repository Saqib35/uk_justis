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
        'stripe_product_id',
        'price_one',
        'stripe_price_id_one',
        'duration_one',
        'price_two',
        'stripe_price_id_two',
        'duration_two',
        'price_three',
        'stripe_price_id_three',
        'duration_three',
        'price_four',
        'stripe_price_id_four',
        'duration_four',
        'include_one',
        'include_two',
        'include_three',
        'include_four',
        'include_five',
        'include_six',
        'status',
        
    ];

}
