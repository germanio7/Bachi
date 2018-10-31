@extends('home')

@section('contenido')

	<div class="fixed-action-btn">
		<a href="{{route('cursos.create')}}" class="btn-floating btn-large green"><i class="material-icons">add</i>>Agregar Curso</a>

		<a href="#modalBuscarCurso" class="waves-effect waves-light btn modal-trigger"><i class="material-icons">search</i></a>
	</div>

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
						<a href="{{route('cursos.show',$curso->id)}}" class="btn green darken-4">Ver más</a>

						{!!Form::open(['route'=>['cursos.destroy',$curso->id],'method'=>'DELETE'])!!}
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
	<div id="modalBuscarCurso" class="modal">
		<div class="modal-content">
			{!! Form::open(['action' => 'CursosController@buscar','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}
			
				<div class="row">
					<div class="input-field col s4">
			    		{{ Form::label('busqueda','Curso, Orientacion o Turno',(['class'=>'active','for'=>'busqueda'])) }}
			    		{{ Form::text('busqueda','',(['class'=>'validate'])) }}
					</div>
				</div>

			{{ Form::submit('Buscar',(['class'=>'btn green',])) }}
	    	
			{!! Form::close() !!}
		</div>
	</div>

@endsection