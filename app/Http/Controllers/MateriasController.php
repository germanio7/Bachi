<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Materia;

use App\Docente;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::orderBy('nombre')->get();

        // return view('materias.index',compact('materias'));

        // $materias = DB::table('materias')->orderBy('id','desc')->get();
        return view('materias.index', ['materias' => $materias]);
    }

    public function buscar(Request $request){

        $materias = Materia::where('nombre','like','%'.$request->busqueda.'%')->get();

        return view('materias.index', compact('materias'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docentes = Docente::all();

        return view('materias.create', compact('docentes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //crea la materia
        $materia = Materia::create(['nombre' => $request->nombre]);

        //obtiene la materia recientemente creada
        $mat = Materia::find($materia->id);

        //se hace la relacion 
        $mat->docentes()->attach($request->get('docente_id'));

        return redirect('materias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materia = Materia::find($id);

        return view('materias.show', compact('materia'));
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
        $materia = Materia::find($id);

        $materia->delete();

        return redirect('materias');
    }
}
