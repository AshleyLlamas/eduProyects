<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $dates = ['created_at', 'updated'];

    protected $fillable = [
        'respuesta',
        'student_id',
        'question_id'
    ];
}
