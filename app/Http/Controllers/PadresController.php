<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Padre;

use App\Alumno;

class PadresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $padres = Padre::orderBy('apellido')->get();

        return view('padres.index',compact('padres'));
    }

    public function buscar(Request $request){

        $padres = Padre::where('cuil','like','%'.$request->busqueda.'%')->orWhere('apellido','like','%'.$request->busqueda.'%')->orWhere('nombre','like','%'.$request->busqueda.'%')->get();

        return view('padres.index', compact('padres'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnos = Alumno::doesntHave('padre')->orderBy('nombre')->get();
        
        return view('padres.create', compact('alumnos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $padre = new Padre;

        $padre->alumno_id = $request->get('alumno_id');
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

        return redirect('padres');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $padre = Padre::find($id);

        return view('padres.show', compact('padre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
