@extends('inicio')

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
						@foreach($materiasCurso as $materia)
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
			{!! Form::open(['action' => 'CursosController@agregarMateria','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}
			
				<select name="seleccionMateria" class="input-field col s3">
					<option value="" disabled selected>Elegir Materia</option>
					@foreach($agregarMaterias as $agregar)
			      		<option value="{{$agregar->id}}">{{$agregar->nombre}}</option>
		      		@endforeach
		    	</select>

		    	<input type="hidden" name="curso" value="{{$curso->id}}">
			{{ Form::submit('Agregar',(['class'=>'btn green',])) }}
	    	
			{!! Form::close() !!}
		</div>
	</div>

	{{-- Estructura Modal Alumno --}}
	<div id="modalAlumno" class="modal lime lighten-4">
		<div class="modal-content">
			{!! Form::open(['action' => 'CursosController@agregarAlumno','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}
			
				<select name="seleccion" class="input-field col s3">
					<option value="" disabled selected>Elegir Alumno</option>
					@foreach($agregarAlumnos as $alum)
			      		<option value="{{$alum->id}}">{{$alum->cuil}} - {{$alum->apellido}} {{$alum->nombre}}</option>
		      		@endforeach
		    	</select>

		    	<input type="hidden" name="curso" value="{{$curso->id}}">
			{{ Form::submit('Agregar',(['class'=>'btn green',])) }}
	    	
			{!! Form::close() !!}
		</div>
	</div>

	{{-- Estructura Modal Asistencia --}}
	<div id="modalAsistencia" class="modal lime lighten-4">
		<div class="modal-content">
		
				{!! Form::open(['action' => 'AsistenciasController@store','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}
				<b>Asistencia del Día: </b>

				<p>{{$hoy}}</p>

				@if(empty($hay))

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
										<input type="hidden" name="id[]" value="{{$alumno->id}}">
										<td>{{$alumno->id}}</td>
										<td>{{$alumno->apellido}}</td>
										<td>{{$alumno->nombre}}</td>
										<td>
											<select name="asistencia[]" class="input-field col s3">
									    		<option value="" disabled selected>Asistencia</option>
									      		<option value=1 >Presente</option>
									      		<option value=0 >Ausente</option>
									      		<option value=0.5 >Media Falta</option>
									    	</select>
										</td>
										<td>
											<input type="text" name="comentario[]" class="validate">
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				@else
					<p>Asistencia realizada</p>
				@endif

			<div class="modal-footer">
				{{ Form::submit('Alamacenar',(['class'=>'btn green'])) }}
			</div>
			{!! Form::close() !!}
		
<<<<<<< HEAD
	</div>


@endsection
=======
	</div>
>>>>>>> 1bfbc0aefe0b61054b530e72f73443fbea423d81
