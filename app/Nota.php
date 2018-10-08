<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = ['alumno_id', 'materia_id', '1_trimestre', '2_trimestre', '3_trimestre', 'integral', 'diciembre', 'marzo', 'final'];

    public function alumnos(){
    	
    	return $this->hasMany('App\Alumno', 'id');
    }

    public function materias(){
    	
    	return $this->hasMany('App\Materia', 'id');
    }
}
