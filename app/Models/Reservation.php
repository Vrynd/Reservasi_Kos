<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'room_number',
        'rental_date',
        'rental_duration',
    ];
}
