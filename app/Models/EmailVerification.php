<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class EmailVerification extends Model
{
    protected $fillable = ['email', 'code', 'verified_at'];
    protected $casts = ['verified_at' => 'datetime'];

    public $timestamps = true;
}
