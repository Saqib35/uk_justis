<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'mobile',
        'categories_type',
        'personal_name',
        'personal_email',
        'address',
        'post_code',
        'country',
        'city',
        'gender',
        'category_id',
        'sub_category_id',
        'id_card_img',
        'profile_img',
        'monday',
        'monday_start_time',
        'monday_end_time',
        'tuesday',
        'tuesday_start_time',
        'tuesday_end_time',
        'wednesday',
        'password',
        'wednesday_start_time',
        'wednesday_end_time',
        'thursday',
        'thursday_start_time',
        'thursday_end_time',
        'friday',
        'friday_start_time',
        'friday_end_time',
        'saturday',
        'saturday_start_time',
        'saturday_end_time',
        'sunday',
        'sunday_start_time',
        'sunday_end_time',
        'cash',
        'credit_card',
        'check',
        'name',
        'wire_transfer',
        'email_verified_at',
        'password',
        'user_type',
        'latitude',
        'longitude',
        'otp',
        'status',
        'ip_address',
        'remember_token',
        'gender',
        'date_of_birth',
        'age'
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
