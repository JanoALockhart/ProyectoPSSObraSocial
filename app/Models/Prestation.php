<?php

// app/Models/Prestation.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestation extends Model
{
    use HasFactory;

    protected $table = 'prestations'; // Nombre de la tabla de prestaciones
    protected $fillable = [
        'name',
        'percentage',
    ];

    // Definir la relación muchos a muchos con Plan
    public function plans()
    {
        return $this->belongsToMany(Plan::class, 'prestation_plan', 'prestation_id', 'plan_id')->withTimestamps();
    }
}
