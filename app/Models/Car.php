<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'model',
        'brand',
        'make_year',
        'passenger_capacity',
        'kilometers_per_liter',
        'fuel_type',
        'transmission_type',
        'daily_rate',
        'image_url',
        'available'
    ];
}
