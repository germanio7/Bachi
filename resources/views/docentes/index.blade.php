@extends('home')

@section('contenido')
	<a href="{{route('docentes.create')}}" class="btn-floating btn-large green"><i class="material-icons">add</i>>Agregar Docente</a>

	<a href="#modalBuscarDocente" class="waves-effect waves-light btn modal-trigger"><i class="material-icons">search</i></a>

	<blockquote class="blockquote text-center"><h1>Lista Docentes</h1></blockquote>
	
	<div class="card-panel hoverable green lighten-4">

	<table class="highlight">
		<thead>
			<tr>
				<th>ID</th>
				<th>Cuil</th>
				<th>Apellido</th>
				<th>Nombre</th>
				<th>Matricula</th>
				<th>Titulo</th>
				<th>Direccion</th>
				<th>Telefono</th>
				<th>Email</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($docentes as $docente)
			
			<tr>
				<td>{{$docente->id}}</td>
				<td>{{$docente->cuil}}</td>
				<td>{{$docente->apellido}}</td>
				<td>{{$docente->nombre}}</td>
				<td>{{$docente->matricula}}</td>
				<td>{{$docente->titulo}}</td>
				<td>{{$docente->direccion}}</td>
				<td>{{$docente->telefono}}</td>
				<td>{{$docente->email}}</td>
				<td>
					<div class="btn-group btn-group-justified">
						<a href="{{route('docentes.show',$docente->id)}}" class="btn green darken-4">Ver</a>
					</div>
				</td>
			</tr>
			
			@endforeach
		</tbody>
	</table>

	</div>

	{{-- Estructura Modal --}}
	<div id="modalBuscarDocente" class="modal">
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