<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;

    protected $guard_name = 'web';

    protected $primaryKey = 'administrator_id';
    public $incrementing = true;

    protected $fillable = [
        'DNI',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'DNI', 'DNI');
    }
}
