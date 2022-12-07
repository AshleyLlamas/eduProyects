<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $dates = ['created_at', 'updated'];

    protected $fillable = [
        'opción',
        'question_id'
    ];
}
