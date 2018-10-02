@extends('home')

@section('contenido')
	<a href="{{route('padres.create')}}" class="btn-floating btn-large green"><i class="material-icons">add</i>>Agregar Padre</a>

	<a href="#modalBuscarPadre" class="waves-effect waves-light btn modal-trigger"><i class="material-icons">search</i></a>

	<blockquote class="blockquote text-center"><h1>Lista Padres</h1></blockquote>
	
	<div class="card-panel hoverable green lighten-4">

	<table class="highlight">
		<thead>
			<tr>
				<th>ID</th>
				<th>Alumno</th>
				<th>Cuil</th>
				<th>Apellido</th>
				<th>Nombre</th>
				<th>Fecha Nacimiento</th>
				<th>Lugar Nacimiento</th>
				<th>Nacionalidad</th>
				<th>Direccion</th>
				<th>Ocupacion</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($padres as $padre)
			
			<tr>
				<td>{{$padre->id}}</td>
				<td>{{$padre->alumno_id}}</td>
				<td>{{$padre->cuil}}</td>
				<td>{{$padre->apellido}}</td>
				<td>{{$padre->nombre}}</td>
				<td>{{$padre->fecha_nacimiento}}</td>
				<td>{{$padre->lugar_nacimiento}}</td>
				<td>{{$padre->nacionalidad}}</td>
				<td>{{$padre->direccion}}</td>
				<td>{{$padre->ocupacion}}</td>
				{{-- @foreach($padre->alumnos as $alumno)
					<td>{{$alumno->nombre}}</td>
				@endforeach --}}
				<td>
					<div class="btn-group btn-group-justified">
						<a href="{{-- {{route('padre.show',$padre->id)}} --}}" class="btn green darken-4">Ver</a>
					</div>
				</td>
			</tr>
			
			@endforeach
		</tbody>
	</table>

	</div>

	{{-- Estructura Modal --}}
	<div id="modalBuscarPadre" class="modal">
		<div class="modal-content">
			
			<div class="row">
			<div class="input-field col s12">
	    		{{ Form::label('curso','Cuil, Apellido o Nombre del Alumno',(['class'=>'active','for'=>'curso'])) }}
	    		{{ Form::text('curso','',(['class'=>'validate'])) }}
			</div>
			</div>
			
		</div>
		<div class="modal-footer">
			<a href="{{-- {{route('cursos.agregarMateria','$curso->id')}} --}}" class="modal-close waves-effect waves-green btn-flat">Buscar</a>
		</div>
	</div>

@endsection