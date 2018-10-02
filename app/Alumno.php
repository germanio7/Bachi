<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = ['cuil','apellido','nombre','fecha_nacimiento','lugar_nacimiento','nacionalidad','direccion','telefono','email','asignacion_universal','salario_familiar','pueblo_originario','programa_cai','discapacidad','diabetes','hernias','convulsiones','problemas_respiratorios','problemas_cardiacos','alergias','esguinces','enfermedades_infectocontagiosas','incapacidad','otros','certificado_salud','certificado_dental','carnet_vacuna','grupo_sanguineo','certificado_nivel_inicial','fotocopia_dni','contribucion_cooperadora'];

    public function padre()
    {
    	//relacion uno a uno
        return $this->belongsTo('App\Padre');
    }

    public function cursos()
    {
    	//relacion muchos a muchos
        return $this->belongsToMany('App\Curso');
    }
}
