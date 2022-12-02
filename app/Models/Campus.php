<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;

    protected $fillable = [
        'campus',
        'address_id'
    ];

    //Uno a Uno Inversa
    public function address(){
        return $this->belongsTo('App\Models\Address');
    }

    //Uno a Muchos
    public function students(){
        return $this->hasMany('App\Models\Student');
    }
}
