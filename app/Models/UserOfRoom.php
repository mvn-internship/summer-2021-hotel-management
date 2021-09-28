<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOfRoom extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_name', 
        'address',
        'phone',
        'check_in',
        'identity_card'
    ];
}
