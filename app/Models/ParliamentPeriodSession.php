<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParliamentPeriodSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'parliament_period_id'
    ];
}
