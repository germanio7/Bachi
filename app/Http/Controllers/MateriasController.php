<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Materia;

use App\Docente;

class MateriasController extends Controller
{

    public function index()
    {
        $materias = Materia::orderBy('nombre');
        return $materias->paginate(6);
    }

    public function buscar(Request $request){
        $materias = Materia::where('nombre','like','%'.$request->busqueda.'%')->get();
        return $materias;
    }

    public function store(Request $request)
    {
        $materia = Materia::create(['nombre' => $request->nombre]);
        $mat = Materia::find($materia->id);
        $mat->docentes()->attach($request->get('docente_id'));

    }

    public function show($id)
    {
        $materia = Materia::find($id);

        return view('materias.show', compact('materia'));
    }

    public function update(Request $request, $id)
    {
        $materia = Materia::find($id);
        $materia->nombre = $request->nombre;
        $materia->save();
    }

    public function destroy($id)
    {
        $materia = Materia::find($id);
        $materia->delete();
    }
}
