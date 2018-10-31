<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['curso','orientacion','turno'];

    public function materias()
    {
    	//relacion muchos a muchos
        return $this->belongsToMany('App\Materia');
    }

    public function alumnos()
    {
    	//relacion muchos a muchos
        return $this->belongsToMany('App\Alumno');
    }
}
