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
        'recipient_DNI',
        'recipient_name',
        'recipient_last_name',
        'request_image_path',
        'amount',
        'state',
        'description',
        'client_id'
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
