<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'preferred_date', 'preferred_time',
        'service', 'message', 'status'
    ];

    protected $casts = [
        'preferred_date' => 'date'
    ];
}