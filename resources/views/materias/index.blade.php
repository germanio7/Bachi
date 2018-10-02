@extends('home')

@section('contenido')
	<a href="{{route('materias.create')}}" class="btn-floating btn-large green"><i class="material-icons">add</i>>Agregar Materia</a>

	<a href="#modalBuscarMateria" class="waves-effect waves-light btn modal-trigger"><i class="material-icons">search</i></a>

	<blockquote class="blockquote text-center"><h1>Lista Materias</h1></blockquote>

	<div class="card-panel hoverable green lighten-4">

	<table class="highlight">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($materias as $materia)
			
			<tr>
				<td>{{$materia->id}}</td>
				<td>{{$materia->nombre}}</td>
				<td>
					<div class="btn-group btn-group-justified">
						<a href="{{route('materias.show',$materia->id)}}" class="btn green darken-4">Ver</a>
					</div>

				</td>
			</tr>
			
			@endforeach
		</tbody>
	</table>

	</div>

	{{-- Estructura Modal --}}
	<div id="modalBuscarMateria" class="modal">
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