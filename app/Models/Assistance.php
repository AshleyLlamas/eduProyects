<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated'];

    protected $dates = ['created_at'];

    protected $fillable = [
        'check_id',
        'student_id',
        'asistencia',
        'observación'
    ];

    //Uno a Muchos Inversa
    public function student(){
        return $this->belongsTo('App\Models\Student');
    }

    //Uno a Uno Inversa
    public function check(){
        return $this->belongsTo('App\Models\Check');
    }
}
