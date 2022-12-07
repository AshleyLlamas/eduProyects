<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    use HasFactory;

    protected $dates = ['created_at', 'updated'];

    protected $fillable = [
        'título',
        'user_id'
    ];
}
