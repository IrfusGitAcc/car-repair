<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';

    protected $primaryKey = 'booking_id';

    protected $fillable = [
        'car_reg',
        'postcode',
        'email',
        'services',
        'name',
        'mobile',
        'booking_date',
        'pickup_postcode'
    ];

    protected $casts = [
        'services' => 'array',
        'booking_date' => 'date'
    ];
}
