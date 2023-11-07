<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Minor18 extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'DNI',
        'firstName',
        'lastName',
        'birthDate',
        'phone',
        'address',
        'email',
        'client_id',
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
