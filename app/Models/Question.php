<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $dates = ['created_at', 'updated'];

    protected $fillable = [
        'pregunta',
        'questionnaire_id',
        'tipo_de_pregunta'
    ];
}
