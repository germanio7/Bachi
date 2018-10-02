<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Materia;

class Docente extends Model
{
    protected $fillable = ['cuil','apellido','nombre','matricula','titulo','direccion','telefono','email'];

    public function materia()
    {
    	//relacion uno a uno
        return $this->hasMany('App\Materia');
    }
}
