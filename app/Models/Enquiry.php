<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $table = 'enquiries';
    protected $primaryKey = 'service_id';
    protected $fillable = [
        'service',
        'year',
        'make',
        'model',
        'submodel',
        'registration',
        'mileage'
    ];
}
