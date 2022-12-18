<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberOfParliament extends Model
{
    use HasFactory;

    protected $table = 'member_of_parliaments';

    protected $fillable = [
        'phone', 'gender', 'name', 'email'
    ];
}
