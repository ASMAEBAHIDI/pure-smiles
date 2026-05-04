<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Specialist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'title', 'description', 'image', 'cost_range',
        'treatment_time_weeks', 'complexity_percent', 'specialty',
        'is_active', 'order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'treatment_time_weeks' => 'integer',
        'complexity_percent' => 'integer'
    ];
}