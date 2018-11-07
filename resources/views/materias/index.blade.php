@extends('home')

@section('contenido')
	<div class="fixed-action-btn">
		<a href="{{route('materias.create')}}" class="btn-floating btn-large green"><i class="material-icons">add</i>>Agregar Materia</a>

		<a href="#modalBuscarMateria" class="waves-effect waves-light btn modal-trigger"><i class="material-icons">search</i></a>
	</div>

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
						<a href="{{route('materias.show',$materia->id)}}" class="btn green darken-4">Ver más</a>

						<a href="{{route('materias.edit',$materia->id)}}" class="btn green darken-4">Edit</a>

						{!!Form::open(['route'=>['materias.destroy',$materia->id],'method'=>'DELETE'])!!}
							<button class="btn red darken-4">Eliminar</button>
						{!!Form::close()!!}
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
			{!! Form::open(['action' => 'MateriasController@buscar','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}
			
				<div class="row">
					<div class="input-field col s4">
			    		{{ Form::label('busqueda','Materia',(['class'=>'active','for'=>'busqueda'])) }}
			    		{{ Form::text('busqueda','',(['class'=>'validate'])) }}
					</div>
				</div>

			{{ Form::submit('Buscar',(['class'=>'btn green',])) }}
	    	
			{!! Form::close() !!}
		</div>
	</div>

@endsection