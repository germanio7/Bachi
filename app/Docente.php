<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

use App\Materia;

class Docente extends Model
{
	 use SoftDeletes; 

    protected $fillable = ['cuil','apellido','nombre','matricula','titulo','direccion','telefono','email'];

    protected $dates = ['deleted_at'];

    public function materia()
    {
    	//relacion uno a uno
        return $this->belongsToMany('App\Materia');
    }
}
