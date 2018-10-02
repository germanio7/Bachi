@extends('home')

@section('contenido')
	<a href="{{route('cursos.create')}}" class="btn-floating btn-large green"><i class="material-icons">add</i>>Agregar Curso</a>

	<a href="#modalBuscarCurso" class="btn-floating btn-large green"><i class="material-icons">search</i></a>

	<blockquote class="blockquote text-center"><h1>Lista Cursos</h1></blockquote>
	
	<div class="card-panel hoverable green lighten-4">

	<table class="highlight">
		<thead>
			<tr>
				<th>ID</th>
				<th>Curso</th>
				<th>Orientacion</th>
				<th>Turno</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cursos as $curso)
			
			<tr>
				<td>{{$curso->id}}</td>
				<td>{{$curso->curso}}</td>
				<td>{{$curso->orientacion}}</td>
				<td>{{$curso->turno}}</td>
				<td>
					<div class="btn-group btn-group-justified">
						<a href="{{route('cursos.show',$curso->id)}}" class="btn green darken-4">Ver</a>
					</div>
				</td>
			</tr>
			
			@endforeach
		</tbody>
	</table>

	</div>

	{{-- Estructura Modal --}}
	<div id="modalBuscarCurso" class="modal">
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