<?php
use App\Alumno;
use App\Materia;
use App\Docente;
use App\Padre;
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

Route::resource('notas', 'NotasController');

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
	$pdf = PDF::loadView('alumnos.verAlumno',compact('alumno'));
	return $pdf->stream();
})->name('descargarAlumno');

Route::get('descargarPadre/{id}', function($id){
	$padre = Padre::find($id);
	$pdf = PDF::loadView('padres.verPadre',compact('padre'));
	return $pdf->stream();
})->name('descargarPadre');

Route::post('buscarAlumno','AlumnosController@buscar')->name('alumnos.buscar');

Route::post('buscarCurso','CursosController@buscar')->name('cursos.buscar');

Route::post('buscarDocente','DocentesController@buscar')->name('docentes.buscar');

Route::post('buscarMateria','MateriasController@buscar')->name('materias.buscar');

Route::post('buscarPadre','PadresController@buscar')->name('padres.buscar');

Route::post('agregarAlumno','CursosController@agregarAlumno')->name('cursos.agregarAlumno');

Route::post('AgregarMateria','CursosController@agregarMateria')->name('cursos.agregarMateria');
