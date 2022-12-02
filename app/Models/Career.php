<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'carrera',
        'abreviatura'
    ];

    //Uno a Muchos
    public function students(){
        return $this->hasMany('App\Models\Student');
    }
}
