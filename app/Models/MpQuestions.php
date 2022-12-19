<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MpQuestions extends Model
{
    use HasFactory;

    protected $table = 'mp_questions';

    protected $fillable = [
        'question', 'type', 'description'
    ];

}
