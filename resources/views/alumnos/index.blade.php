@extends('home')

@section('contenido')

	<div class="fixed-action-btn">
		<a href="{{route('alumnos.create')}}" class="btn-floating btn-large green"><i class="material-icons">add</i></a>

		<a href="#modalBuscarAlumno" class="waves-effect waves-light btn modal-trigger"><i class="material-icons">search</i></a>

	</div>

	<blockquote class="blockquote text-center"><h1>Lista Alumnos</h1></blockquote>
	
	<div class="card-panel hoverable green lighten-4">

	<table class="highlight">
		<thead>
			<tr>
				<th>ID</th>
				<th>Cuil</th>
				<th>Apellido</th>
				<th>Nombre</th>
				<th>Fecha Nacimiento</th>
				<th>Lugar Nacimiento</th>
				<th>Nacionalidad</th>
				<th>Direccion</th>
				<th>Telefono</th>
				<th>Email</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($alumnos as $alumno)
			
			<tr>
				<td>{{$alumno->id}}</td>
				<td>{{$alumno->cuil}}</td>
				<td>{{$alumno->apellido}}</td>
				<td>{{$alumno->nombre}}</td>
				<td>{{$alumno->fecha_nacimiento}}</td>
				<td>{{$alumno->lugar_nacimiento}}</td>
				<td>{{$alumno->nacionalidad}}</td>
				<td>{{$alumno->direccion}}</td>
				<td>{{$alumno->telefono}}</td>
				<td>{{$alumno->email}}</td>				
				<td>
					<div class="btn-group btn-group-justified">
						<a href="{{route('alumnos.show',$alumno->id)}}" class="btn green darken-4">Ver más</a>
					</div>
				</td>
			</tr>
			
			@endforeach
		</tbody>
	</table>

	</div>

	{{-- Estructura Modal --}}
	<div id="modalBuscarAlumno" class="modal">
		<div class="modal-content">
			{!! Form::open(['action' => 'AlumnosController@buscar','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}
			
				<div class="row">
					<div class="input-field col s4">
			    		{{ Form::label('busqueda','Cuil, Apellido o Nombre',(['class'=>'active','for'=>'busqueda'])) }}
			    		{{ Form::text('busqueda','',(['class'=>'validate'])) }}
					</div>
				</div>

			{{ Form::submit('Buscar',(['class'=>'btn green',])) }}
	    	
			{!! Form::close() !!}
		</div>
	</div>

@endsection