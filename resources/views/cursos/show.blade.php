@extends('home')

@section('contenido')
	
	<div class="card-panel hoverable green lighten-4">
		<div class="row">
			<div class="input-field col s4">
				{{ Form::label('curso','Curso',(['class'=>'active','for'=>''])) }}
				<h5>{{$curso->curso}}</h5>
			</div>
			<div class="input-field col s4">
				{{ Form::label('orientacion','Orientacion',(['class'=>'active','for'=>''])) }}
				<h5>{{$curso->orientacion}}</h5>
			</div>	
			<div class="input-field col s4">
				{{ Form::label('turno','Turno',(['class'=>'active','for'=>''])) }}
				<h5>{{$curso->turno}}</h5>
			</div>
			<div class="input-field col s4">
				<a href="#modalAsistencia" class="waves-effect waves-light btn modal-trigger">Asistencia</a>
			</div>
		</div>
	</div>

	<div class="card-panel hoverable green lighten-4">

		<div class="row">
			<div class="input-field col s6">
				{{-- Modal --}}
				<a href="#modalMateria" class="waves-effect waves-light btn modal-trigger">Agregar Materia</a>

				<table class="highlight">
					<thead>
						<tr>
							<th>Materias</th>
						</tr>
					</thead>
					<tbody>
						@foreach($materias as $materia)
						<tr>
							<td>{{$materia->nombre}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div> 
			
			<div class="input-field col s6">
				{{-- Modal --}}
				<a href="#modalAlumno" class="waves-effect waves-light btn modal-trigger">Agregar Alumno</a>

				<table class="highlight">
					<thead>
						<tr>
							<th>Cuil</th>
							<th>Apellido</th>
							<th>Nombre</th>
						</tr>
					</thead>
					<tbody>
						@foreach($alumnos as $alumno)
						
						<tr>
							<td>{{$alumno->cuil}}</td>
							<td>{{$alumno->apellido}}</td>
							<td>{{$alumno->nombre}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div> 
		</div>
	</div>

	{{-- Estructura Modal Materia --}}
	<div id="modalMateria" class="modal lime lighten-4">
		<div class="modal-content">
			{{ Form::label('agregarMateria','Agregar Materia',(['class'=>'active','for'=>'direccion'])) }}
		    @foreach($agregarMaterias as $mater)
				<form action="#">
				    <p>
				      <label>
				        <input type="checkbox" />
				        <span>{{$mater->nombre}}</span>
				      </label>
				    </p>
				</form>
			@endforeach
		</div>
		<div class="modal-footer">
			<a href="{{-- {{'cursos.agregarMateria','$materia->id'}} --}}" class="modal-close btn">Agregar</a>
		</div>
	</div>

	{{-- Estructura Modal Alumno --}}
	<div id="modalAlumno" class="modal lime lighten-4">
		<div class="modal-content">
			{{ Form::label('agregarAlumnos','Agregar Alumno',(['class'=>'active'])) }}
	    	
				{{-- <form action="#">
				    <p>
				      <label>
				        <input type="checkbox" />
				        <span>{{$alum->cuil}} - {{$alum->apellido}},  {{$alum->nombre}}</span>
				      </label>
				    </p>
				</form> --}}
				
				<select class="input-field col s3">
					<option value="" disabled selected>Elegir Alumno</option>
					@foreach($agregarAlumnos as $alum)
			    		
			      		<option value="{{$alum->id}}">{{$alum->cuil}} - {{$alum->apellido}}</option>
		      		@endforeach
		    	</select>

			
		</div>
		<div class="modal-footer">
			<a href="{{-- {{'cursos.agregarAlumno','$alum->id'}} --}}" class="modal-close btn">Agregar</a>
		</div>
	</div>

	{{-- Estructura Modal Asistencia --}}
	<div id="modalAsistencia" class="modal lime lighten-4">
		<div class="modal-content">
			{!! Form::open(['action' => 'AsistenciasController@store','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}
			{{ Form::label('asistencia','Asistencia del día: ',(['class'=>'active','for'=>''])) }}

			{{ Form::text('fecha','',(['disabled','placeholder'=>$hoy,'value'=>$hoy])) }} 
			{{-- <h5>{{$hoy}}</h5> --}}

			<div class="card-panel hoverable">

			<table class="highlight">
				<thead>
					<tr>
						<th>ID</th>
						<th>Apellido</th>
						<th>Nombre</th>
						<th>Asistencia</th>
						<th>Comentario</th>
					</tr>
				</thead>
				<tbody>
					@foreach($alumnos as $alumno)
					<tr>
						<td>{{ Form::text('id','',(['disabled','placeholder'=>$alumno->id,'value'=>$alumno->id])) }}</td>
						@php
							$fecha = $hoy;
							$id = $alumno->id;
						@endphp
						<td>{{$alumno->apellido}}</td>
						<td>{{$alumno->nombre}}</td>
						<td>
							<select id="asistencia" class="input-field col s3">
					    		<option value="" disabled selected>Asistencia</option>
					      		<option value="1">Presente</option>
					      		<option value="0">Ausente</option>
					      		<option value="0,5">Media Falta</option>
					    	</select>
						</td>
						<td>
							{{ Form::text('comentario','',(['class'=>'validate'])) }}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="modal-footer">
			{{ Form::submit('Alamacenar',(['class'=>'btn green'])) }}
	    	
		
		</div>
		{!! Form::close() !!}
	</div>

@endsection