@extends('home')

@section('contenido')
	
	<div class="row">
		<blockquote class="blockquote"><h5>ID: </h5></blockquote> {{$materia->id}}
	</div>
	
	<div class="row">
		<blockquote class="blockquote"><h5>Materia: </h5></blockquote> {{$materia->nombre}}
	</div>

	<div class="row">
		<a href="{{route('descargarMateria',$materia->id)}}" class="btn green darken-4">Descargar</a>
	</div>

@endsection