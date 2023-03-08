<?php

namespace App\Models\Pro;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pro_Stripe_Subcriptions extends Model
{
    use HasFactory;

    public $table="pro_stripe_subcriptions";

    
    protected $fillable = [
        'pro_id',
        'plan_id',
        'email',
        'subscription_id',
        'customer_id',
        'start_date',
        'expired_date',
        'plan_interval',
        'plan_amount',
        
        
    ];
     
}
