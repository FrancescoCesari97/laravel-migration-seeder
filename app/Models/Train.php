<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    protected $fillable = ['company', 'departure_station', 'arrive_station', 'departure_time', 'arrive_time', 'train_code', 'carriages', 'on_time', 'canceled', 'type', 'highspeed'];
}
