<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Docente;
use App\Materia;

class DocentesController extends Controller
{

    public function index()
    {
        $docentes = Docente::orderBy('apellido');
        return $docentes->paginate(10);
        
    }

    public function buscar(Request $request){

      $docentes = Docente::where('cuil','like','%'.$request->busqueda.'%')->orWhere('apellido','like','%'.$request->busqueda.'%')->orWhere('nombre','like','%'.$request->busqueda.'%')->orWhere('matricula','like','%'.$request->busqueda.'%')->get();
      return $docentes;

    }

    public function store(Request $request)
    {
        $docente = new Docente;

        $docente->cuil = $request->cuil;
        $docente->apellido = $request->apellido;
        $docente->nombre = $request->nombre;
        $docente->matricula = $request->matricula;
        $docente->titulo = $request->titulo;
        $docente->direccion = $request->direccion;
        $docente->telefono = $request->telefono;
        $docente->email = $request->email;

        $docente->save();

    }

    public function show($id)
    {
        $docente = Docente::find($id);

        return view('docentes.show', compact('docente'));
    }

    public function update(Request $request, $id)
    {
        $docente = Docente::find($id);

        $docente->cuil = $request->cuil;
        $docente->apellido = $request->apellido;
        $docente->nombre = $request->nombre;
        $docente->matricula = $request->matricula;
        $docente->titulo = $request->titulo;
        $docente->direccion = $request->direccion;
        $docente->telefono = $request->telefono;
        $docente->email = $request->email;

        $docente->save();
    }

    public function destroy($id)
    {
        $docente = Docente::find($id);
        $docente->delete();

    }
}
