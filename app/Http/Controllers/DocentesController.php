<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Docente;

use App\Materia;

class DocentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $materias = Materia::all();

        //usar eloquent para que no muestre los softDelete
        $docentes = Docente::orderBy('apellido')->get();

        // return view('docentes.index',compact('docentes'));

        // $docentes = DB::table('docentes')->orderBy('nombre')->get();
        return view('docentes.index', ['docentes' => $docentes]);
    }

    public function buscar(Request $request){

        $docentes = Docente::where('cuil','like','%'.$request->busqueda.'%')->orWhere('apellido','like','%'.$request->busqueda.'%')->orWhere('nombre','like','%'.$request->busqueda.'%')->orWhere('matricula','like','%'.$request->busqueda.'%')->get();

        return view('docentes.index', compact('docentes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        return redirect('docentes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docente = Docente::find($id);

        return view('docentes.show', compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docente = Docente::find($id);
        return view('docentes.edit',compact('docente'));
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

        return redirect('docentes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docente = Docente::find($id);

        $docente->delete();

        return redirect('docentes');
    }
}
