<?php

namespace App\Http\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'username', 
        'first_name', 
        'last_name', 
        'patronymik', 
        'phone', 
        'email', 
        'password', 
        'company_name', 
        'company_position', 
        'role_id',
    ];

    protected $hidden = [
        'password', 
        'remember_token',
    ];

}
