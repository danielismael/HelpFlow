<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiTicketAttachment extends Model
{
    use HasFactory;

    protected $table = 'ti_ticket_attachments';

    protected $fillable = [
      'url',
      'id_ticket',
    ];
}
