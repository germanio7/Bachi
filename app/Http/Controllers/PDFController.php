<?php

namespace App\Http\Controllers;

use App\Alumno;
use PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function pdf(){
    	$alumnos = Alumno::all();
    	$pdf = PDF::loadView('alumnos.inscripcion', ['alumnos' => $alumnos])->setPaper('Legal');;
    	return $pdf->stream();
    }
}
