<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MpQuestions extends Model
{
    use HasFactory;

    protected $table = 'mp_questions';

    protected $fillable = [
        'question', 'type', 'description', 'member_of_parliament_id', 
        'targeted_group_id', 'sector_field_id', 'parliament_agenda_category_id',
         'parliament_period_session_id','parliament_agenda_id'
    ];

}
