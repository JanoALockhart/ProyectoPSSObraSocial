<?php
// app/Models/Plan.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'min_age',
        'max_age',
        'price',
        'state',
    ];

    // Relación muchos a muchos sin un modelo específico
    public function prestations()
    {
        return $this->belongsToMany(Prestation::class,'prestation_plan');
    }
}
