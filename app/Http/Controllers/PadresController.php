<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Padre;
use App\Alumno;

class PadresController extends Controller
{

    public function index()
    { 
        $padres = Padre::orderBy('apellido');
        return $padres->paginate(10);
    }

    public function buscar(Request $request)
    {
        $padres = Padre::where('cuil','like','%'.$request->busqueda.'%')->orWhere('apellido','like','%'.$request->busqueda.'%')->orWhere('nombre','like','%'.$request->busqueda.'%')->get();
        return view('padres.index', compact('padres'));
    }

    public function create()
    {
        $alumnos = Alumno::doesntHave('padre')->orderBy('nombre')->get();
        return view('padres.create', compact('alumnos'));
    }

    public function show($id)
    {
        $padre = Padre::find($id);
        return view('padres.show', compact('padre'));
    }

    public function update(Request $request, $id)
    {
        $padre = Padre::find($id);
        $padre->madre_padre = $request->get('madre_padre');
        $padre->cuil = $request->cuil;
        $padre->apellido = $request->apellido;
        $padre->nombre = $request->nombre;
        $padre->fecha_nacimiento = $request->fecha_nacimiento;
        $padre->lugar_nacimiento = $request->lugar_nacimiento;
        $padre->nacionalidad = $request->nacionalidad;
        $padre->direccion = $request->direccion;
        $padre->a_cargo = $request->get('a_cargo');
        $padre->es_tutor = $request->get('es_tutor');
        $padre->patria_potestad = $request->get('patria_potestad');
        $padre->vive_con_alumno = $request->get('vive_con_alumno');
        $padre->ocupacion = $request->ocupacion;

        $padre->save();
    }

    public function destroy($id)
    {
        $padre = Padre::find($id);
        $padre->delete();

    }
}
