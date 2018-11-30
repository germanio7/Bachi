<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Nota;

class NotasController extends Controller
{
    public function store(Request $request)
    {
        $nota = new Nota;

        $nota->alumno_id = $request->get('alumno_id');
        $nota->materia_id = $request->get('materia_id');
        $nota->primer_trimestre = $request->primer_trimestre;
        $nota->segundo_trimestre = $request->segundo_trimestre;
        $nota->tercer_trimestre = $request->tercer_trimestre;
        $nota->integral = $request->tercer_trimestre;
        $nota->diciembre = $request->diciembre;
        $nota->marzo = $request->marzo;
        $nota->final = ($request->primer_trimestre+$request->segundo_trimestre+$request->tercer_trimestre)/3;

        $nota->save();

        return view('notas.index');
    }
}
