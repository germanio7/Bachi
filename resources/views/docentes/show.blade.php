@extends('home')

@section('contenido')

	<div class="row">
		<div class="input-field col s4">
			<blockquote class="blockquote"><h5>ID: </h5></blockquote> {{$docente->id}}
		</div>

		<div class="input-field col s4">
			<blockquote class="blockquote"><h5>Cuil: </h5></blockquote> {{$docente->cuil}}
		</div>

		<div class="input-field col s4">
			<blockquote class="blockquote"><h5>Apellido: </h5></blockquote> {{$docente->apellido}}
		</div>

		<div class="input-field col s4">
			<blockquote class="blockquote"><h5>Nombre: </h5></blockquote> {{$docente->nombre}}
		</div>

		<div class="input-field col s4">
			<blockquote class="blockquote"><h5>Matricula: </h5></blockquote> {{$docente->matricula}}
		</div>

		<div class="input-field col s4">
			<blockquote class="blockquote"><h5>Titulo: </h5></blockquote> {{$docente->titulo}}
		</div>

		<div class="input-field col s4">
			<blockquote class="blockquote"><h5>Dirección: </h5></blockquote> {{$docente->direccion}}
		</div>

		<div class="input-field col s4">
			<blockquote class="blockquote"><h5>Telefono: </h5></blockquote> {{$docente->telefono}}
		</div>

		<div class="input-field col s4">
			<blockquote class="blockquote"><h5>Email: </h5></blockquote> {{$docente->email}}
		</div>
	</div>

	<div class="row">
		<a href="{{route('descargarDocente',$docente->id)}}" class="btn green darken-4">Descargar</a>
	</div>

@endsection