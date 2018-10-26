@extends('home')

@section('contenido')

	<div class="fixed-action-btn">
  	<a href="{{route('alumnos.create')}}" class="btn-floating btn-large green"><i class="fas fa-plus fa-lg"></i></a>
	</div>

	<blockquote><h1>Alumnos</h1></blockquote>

	<table class="striped">
		<thead>
			<tr>
				<th>Cuil</th>
				<th>Apellido</th>
				<th>Nombre</th>
				<th>Asistencia</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($alumnos as $alumno)	
			<tr>
				<td>{{$alumno->cuil}}</td>
				<td>{{$alumno->nombre}}</td>
				<td>{{$alumno->apellido}}</td>
				<td></td>
				<td>
					<div class="btn-group" role="group">
			        <a class="btn blue" href="#"><i class="fas fa-print fa-lg"></i></a>
			        <a class="btn green" href="#"><i class="fas fa-pen fa-lg"></i></a>
			      <a class="btn red" href="#"><i class="fas fa-trash fa-lg"></i></a>
			    </div>
				</td>
			@endforeach
		</tbody>
	</table>

{{-- 	<div id="modalBuscarAlumno" class="modal">
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
	</div> --}}

@endsection