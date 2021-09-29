<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevicesOfRoom extends Model
{
    use HasFactory;

    protected $table = 'devices_of_rooms';

    protected $fillable = [
        'device_id', 'room_id', 'status',
    ];
}
