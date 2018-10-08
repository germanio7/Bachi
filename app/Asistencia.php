<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $fillable = ['alumno_id','fecha','asistencia','comentario'];

    public function alumnos(){
    	
    	return $this->hasMany('App\Alumno', 'id');
    }
}
