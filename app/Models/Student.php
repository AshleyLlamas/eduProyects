<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Student extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Sluggable;

    protected $fillable = [
        'email',
        'password',
        'nombre',
        'sexo',
        'curp',
        'address_id',
        'matrícula',
        'grupo',
        'campus_id',
        'semestre',
        'ciclo_escolar',
        'career_id',
        'turno',
        'qr',
        'slug'
    ];

    protected $hidden = [
        'password'
    ];
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'slug'
            ]
        ];
    }

    //Uno a Muchos Inversa
    public function career(){
        return $this->belongsTo('App\Models\Career');
    }

    //Uno a Muchos Inversa
    public function campus(){
        return $this->belongsTo('App\Models\Campus');
    }

    //Uno a Uno Inversa
    public function address(){
        return $this->belongsTo('App\Models\Address');
    }

    //Uno a Muchos
    public function insurances(){
        return $this->hasMany('App\Models\Insurance');
    }

    //Uno a uno polimorfico
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}