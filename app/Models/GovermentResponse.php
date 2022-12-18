<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GovermentResponse extends Model
{
    use HasFactory;

    protected $table = 'goverment_responses';

    protected $fillable = [
        'mp_question_id', 'description'
    ];
 
}
