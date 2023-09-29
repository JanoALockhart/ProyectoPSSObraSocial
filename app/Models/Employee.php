<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $guard_name = 'web';

    protected $primaryKey = 'employee_id';
    public $incrementing = true;

    protected $fillable = [
        'DNI',
        'registration_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'DNI', 'DNI');
    }
}
