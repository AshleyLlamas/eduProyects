<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'calle',
        'número_exterior',
        'número_interior',
        'colonia',
        'codigo_postal',
        'municipality_id'
    ];

    //Uno a Uno Inversa
    public function municipality(){
        return $this->belongsTo('App\Models\Municipality');
    }

    //Uno a Uno
    public function student(){
        return $this->hasOne('App\Models\Student');
    }

    //Uno a Uno
    public function campus(){
        return $this->hasOne('App\Models\Campus');
    }
}
