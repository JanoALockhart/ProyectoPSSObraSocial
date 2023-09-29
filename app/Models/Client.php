<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Client extends Model
{
    use HasFactory, HasRoles;
    
    protected $guard_name = 'web';
    
    protected $primaryKey = 'client_id';
    public $incrementing = true;

    protected $fillable = [
        'DNI',
        'registration_date',
        'plan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'DNI', 'DNI');
    }
}
