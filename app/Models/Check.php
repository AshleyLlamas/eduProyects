<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated'];

    protected $dates = ['fecha', 'created_at'];
    
    protected $fillable = [
        'fecha',
        'in_id',
        'out_id',
        'student_id',
        'schedule_id'
    ];

    //Uno a Muchos Inversa
    public function student(){
        return $this->belongsTo('App\Models\Student');
    }

    //Uno a Uno Inversa
    public function schedule(){
        return $this->belongsTo('App\Models\Schedule');
    }

    //Uno a Uno Inversa
    public function in(){
        return $this->belongsTo('App\Models\TimeCheck');
    }

    //Uno a Uno Inversa
    public function out(){
        return $this->belongsTo('App\Models\TimeCheck');
    }

    //Uno a Uno
    public function assistance(){
        return $this->hasOne('App\Models\Assistance');
    }
}
