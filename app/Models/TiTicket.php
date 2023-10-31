<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiTicket extends Model
{
    use HasFactory;

    protected $table = 'ti_ticket';

    protected $fillable = [
        'title',
        'observation',
        'phone',
        'id_requester'
    ];
}
