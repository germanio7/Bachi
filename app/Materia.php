<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = ['nombre'];

    public function cursos()
    {
    	//relacion muchos a muchos
        return $this->belongsToMany('App\Curso');
    }

    public function docentes()
    {
    	
        return $this->belongsToMany('App\Docente');
    }

    public function notas(){
        
        return $this->belongsTo('App\Nota', 'id');
    }
}
