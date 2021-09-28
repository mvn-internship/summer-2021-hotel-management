<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'email', 
        'password',
        'avatar'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
}
