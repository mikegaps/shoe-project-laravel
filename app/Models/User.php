<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; //for dummy account
use Illuminate\Foundation\Auth\User as Authenticatable; //for login
use Illuminate\Notifications\Notifiable;//for seding notif for user
use Illuminate\Database\Eloquent\Relations\HasMany; //For linking this table to other table



class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'role',
        'profile_image',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    // Relationships
    //As user
    public function shoes(): HasMany //kung ano ang binebenta
    {
        return $this->hasMany(Shoes::class, 'seller_id');
    }

    public function purchases(): HasMany //para sa buyer
    {
        return $this->hasMany(Order::class, 'buyer_id');
    }

    public function sales(): HasMany //para sa seller
    {
        return $this->hasMany(Order::class, 'seller_id');
    }
}
