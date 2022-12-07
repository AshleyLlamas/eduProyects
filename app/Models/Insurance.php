<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;

    protected $dates = ['created_at', 'updated'];

    protected $fillable = [
        'número_de_seguro',
        'aseguranza',
        'student_id'
    ];

    //Uno a Muchos a la inversa
    public function student(){
        return $this->belongsTo('App\Models\Student');
    }
}
