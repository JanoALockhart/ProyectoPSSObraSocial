<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'date',
        'CBU',
        'recipient_name',
        'recipient_last_name',
        'state',
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
