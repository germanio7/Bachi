<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Curso;

use App\Materia;

use App\Alumno;

use App\Asistencia;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::orderBy('curso')->get();

        return view('cursos.index',compact('cursos'));
    }

    public function buscar(Request $request){

        $cursos = Curso::where('curso','like','%'.$request->busqueda.'%')->orWhere('orientacion','like','%'.$request->busqueda.'%')->orWhere('turno','like','%'.$request->busqueda.'%')->get();

        return view('cursos.index', compact('cursos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = new Curso;

        $curso->curso = $request->curso;
        $curso->orientacion = $request->get("orientacion");
        $curso->turno = $request->get("turno");

        $curso->save();

        return redirect('cursos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anio = now()->format('Y');

        $curso = Curso::find($id);

        $materiasCurso = $curso->materias()->orderBy('nombre')->get();

        //recupera los alumnos de la tabla intermedia donde el año coincide con el actual
        $alumnos = $curso->alumnos()->orderBy('apellido')->where('anio', $anio)->get();

        // $agregarMaterias = Materia::all();

        //recupera los alumnos que no existen en la tabla intermedia
        $agregarAlumnos = Alumno::doesntHave('cursos')->orderBy('nombre')->get();

        $hoy = now()->toDateString();

        $todas = Materia::all();

        //contiene las materias que no estan relacionadas con el curso en cuestion
        $agregarMaterias = $todas->diff($materiasCurso);

        $asistencias = Asistencia::all();

        return view('cursos.show', compact('curso', 'materiasCurso', 'alumnos', 'agregarMaterias', 'agregarAlumnos', 'hoy', 'asistencias'));
    }

    public function agregarMateria(Request $request){

        $id = $request->get('curso');

        $curso = Curso::find($id);
        
        $curso->materias()->attach($request->get('seleccionMateria'));

        return redirect('/cursos/'.$id);
    }

    public function agregarAlumno(Request $request){

        $id = $request->get('curso');

        $curso = Curso::find($id);

        $anio = now()->format('Y');
        
        $curso->alumnos()->attach($request->get('seleccion'),['anio'=>$anio]);

        return redirect('/cursos/'.$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso = Curso::find($id);
        return view('cursos.edit',compact('curso'));
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
        $curso = Curso::find($id);

        $curso->curso = $request->curso;
        $curso->orientacion = $request->orientacion;
        $curso->turno = $request->get("turno");

        $curso->save();

        return redirect('cursos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = Curso::find($id);

        $curso->delete();

        return redirect('cursos');
    }
}
