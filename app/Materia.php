<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Materia extends Model
{
    use SoftDeletes;

    protected $fillable = ['nombre'];

    protected $dates = ['deleted_at'];

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
