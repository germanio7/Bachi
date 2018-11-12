<?php

//Ruta Principal
Route::get('/', function () {
    return redirect()->action('InicioController@index');
});
//------------------------------------------------------------

//Rutas Vue

Route::get('alumnado', function () {
    return view('alumnos/index');
});

Route::get('matricula', function () {
    return view('materias/index');
});

//-------------------------------------------------------------

//Rutas Controlador

Route::resource('alumnos', 'AlumnosController');

Route::resource('materias', 'MateriasController');

//-------------------------------------------------------------


Route::view('verMateria', 'materias.verMateria');

Route::view('verDocente', 'docentes.verDocente');



Route::resource('cursos', 'CursosController');

Route::resource('materias', 'MateriasController');

Route::resource('docentes', 'DocentesController');

Route::resource('padres', 'PadresController');

Route::resource('asistencias', 'AsistenciasController');

Route::resource('notas', 'NotasController');

Route::resource('inicio', 'InicioController');

Route::get('pdf', 'PDFController@pdf');
