<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParliamentAgenda extends Model
{
    use HasFactory;

    protected $table = 'parliament_agendas';

    protected $fillable = [
        'agenda_name'
    ];
}
