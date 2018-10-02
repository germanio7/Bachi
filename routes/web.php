<?php
use App\Alumno;
use App\Materia;
use App\Docente;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('verMateria', 'materias.verMateria');

Route::view('verDocente', 'docentes.verDocente');

Route::resource('alumnos', 'AlumnosController');

Route::resource('cursos', 'CursosController');

Route::resource('materias', 'MateriasController');

Route::resource('docentes', 'DocentesController');

Route::resource('padres', 'PadresController');

Route::resource('asistencias', 'AsistenciasController');

Route::get('descargarMateria/{id}', function($id){
	$materia = Materia::find($id);
	$pdf = PDF::loadView('materias.verMateria',compact('materia'));
	return $pdf->stream();
})->name('descargarMateria');

Route::get('descargarDocente/{id}', function($id){
	$docente = Docente::find($id);
	$pdf = PDF::loadView('docentes.verDocente',compact('docente'));
	return $pdf->stream();
})->name('descargarDocente');

Route::get('descargarAlumno/{id}', function($id){
	$alumno = Alumno::find($id);
	$pdf = PDF::loadView('alumnos.show',compact('alumno'));
	return $pdf->stream();
})->name('descargarAlumno');

// Route::get('','CursosController@agregarAlumno')->name('cursos.agregarAlumno');

// Route::get('','CursosController@agregarMateria')->name('cursos.agregarMateria');
