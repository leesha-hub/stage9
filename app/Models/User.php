<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Notifications\Notifiable;
//use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password'
    ];
}
