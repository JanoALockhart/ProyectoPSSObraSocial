<?php

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
        'state',
    ];

    // Relación muchos a muchos con Prestation
    public function prestations()
    {
        return $this->belongsToMany(Prestation::class);
    }
}
