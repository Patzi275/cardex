<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $fillable = [
        'start_date',
        'end_date',
        'total_cost',
        'payement_status',
        'payement_method',
        'car_id',
        'user_id',
    ];
}
