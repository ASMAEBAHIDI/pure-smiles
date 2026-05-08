<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'description', 'long_description',
         'image', 'is_active', 'order'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
    
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}

