<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Alumno;

use App\Padre;

use App\Curso;

use Illuminate\Support\Facades\DB;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $alumnos = Alumno::orderBy('apellido')->get();

        return view('alumnos.index',compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumno::find($id);

        //año actual
        $hoy = now()->format('Y');

        //devuelve el año de la tabla intermedia alumno_curso
        $anio = $alumno->cursos()->select('anio')->where('anio', $hoy)->value('anio');

        //recupera el id del curso de la tabla intermedia alumno_curso
        $idcurso = $alumno->cursos()->select('curso_id')->where('anio', $hoy)->value('curso_id');
        if ($idcurso>0) {
            //busca el curso a partir del id recuperado
            $curso = Curso::find($idcurso);
        } else {
            $curso = $idcurso;
        }
        
        return view('alumnos.show', compact('alumno', 'curso', 'anio'));
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
