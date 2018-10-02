<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Padre extends Model
{
    protected $fillable = ['alumno_id','madre_padre','cuil','apellido','nombre','fecha_nacimiento','lugar_nacimiento','nacionalidad','direccion','a_cargo','es_tutor','patria_potestad','vive_con_alumno','ocupacion'];

    public function alumnos()
    {
    	//relacion uno a muchos
        return $this->hasMany('App\Alumno');
    }
}
