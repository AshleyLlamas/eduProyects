<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'email',
        'celular',
        'teléfono',
        'student_id'
    ];

    //Uno a Muchos inversa
    public function student(){
        return $this->belongsTo('App\Models\Student');
    }
}
