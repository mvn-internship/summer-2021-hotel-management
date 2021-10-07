<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    use HasFactory;

    protected $table = 'accounts';
    protected $guarded = 'admin';

    protected $fillable = [
        'email',
        'password',
        'avatar',
        'name'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
