<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Asistencia;

class AsistenciasController extends Controller
{

    public function store(Request $request)
    {
      $id = $request->id;
      $asis = $request->asistencia;
      $comentario = $request->comentario;

      for ($i=0; $i <count($request->asistencia) ; $i++) { 
          $asistencia = new Asistencia;
          $asistencia->alumno_id = $id[$i];
          $asistencia->fecha = now();
          $asistencia->asistencia = $asis[$i];
          $asistencia->comentario = $comentario[$i];
          $asistencia->save();
      }
      return redirect('cursos');
    }
}
