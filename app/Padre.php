<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Padre extends Model
{
	use SoftDeletes;

    protected $fillable = ['alumno_id','madre_padre','cuil','apellido','nombre','fecha_nacimiento','lugar_nacimiento','nacionalidad','direccion','a_cargo','es_tutor','patria_potestad','vive_con_alumno','ocupacion'];

    protected $dates = ['deleted_at'];

    public function alumnos()
    {
    	//relacion uno a muchos
        return $this->hasMany('App\Alumno','id');
    }
}
