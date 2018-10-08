@extends('home')

@section('contenido')
	
	<div class="card-panel hoverable green lighten-4">
		@if($padre->madre_padre=0)
			<b>Datos Madre</b>
		@else
			<b>Datos Padre</b>
		@endif
		
		<div class="row">
			<div class="input-field col s4">
				{{ Form::label('cuilPadre','Cuil',(['class'=>'active','for'=>''])) }}
				<h5>{{$padre->cuil}}</h5>
			</div>
			<div class="input-field col s4">
				{{ Form::label('apellidoPadre','Apellido',(['class'=>'active','for'=>''])) }}
				<h5>{{$padre->apellido}}</h5>
			</div>	
			<div class="input-field col s4">
				{{ Form::label('nombrePadre','Nombre',(['class'=>'active','for'=>''])) }}
				<h5>{{$padre->nombre}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('fecha','Nacimiento',(['class'=>'active','for'=>''])) }}
				<h5>{{$padre->fecha_nacimiento}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('lugar','Lugar Nacimiento',(['class'=>'active','for'=>''])) }}
				<h5>{{$padre->lugar_nacimiento}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('nacionalidad','Nacionalidad',(['class'=>'active','for'=>''])) }}
				<h5>{{$padre->nacionalidad}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('direccion','Direccion',(['class'=>'active','for'=>''])) }}
				<h5>{{$padre->direccion}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('a_cargo','A Cargo',(['class'=>'active','for'=>''])) }}
				@if($padre->a_cargo=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>

			<div class="input-field col s4">
				{{ Form::label('es_tutor','Es Tutor',(['class'=>'active','for'=>''])) }}
				@if($padre->es_tutor=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>

			<div class="input-field col s4">
				{{ Form::label('patria_potestad','Patria Potestad',(['class'=>'active','for'=>''])) }}
				@if($padre->patria_potestad=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>

			<div class="input-field col s4">
				{{ Form::label('vive_con_alumno','Vive Con Alumno',(['class'=>'active','for'=>''])) }}
				@if($padre->vive_con_alumno=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>

			<div class="input-field col s4">
				{{ Form::label('ocupacion','Ocupacion',(['class'=>'active','for'=>''])) }}
				<h5>{{$padre->ocupacion}}</h5>
			</div>

			<div class="input-field col s4">
				<a href="{{route('descargarPadre',$padre->id)}}" class="btn green darken-4">Descargar</a>
			</div>
		</div>
	</div>

	<div class="card-panel hoverable green lighten-4">
		<b>Datos Del Alumno A Cargo</b>
		<div class="row">
			@foreach($padre->alumnos as $alumno)
				<div class="input-field col s4">
					{{ Form::label('cuilAlumno','Cuil',(['class'=>'active','for'=>''])) }}<h5>{{$alumno->cuil}}</h5>
				</div>

				<div class="input-field col s4">
					{{ Form::label('apellidoAlumno','Apellido',(['class'=>'active','for'=>''])) }}<h5>{{$alumno->apellido}}</h5>
				</div>

				<div class="input-field col s4">
					{{ Form::label('nombreAlumno','Nombre',(['class'=>'active','for'=>''])) }}<h5>{{$alumno->nombre}}</h5>
				</div>
				
				@foreach($alumno->cursos as $curso)
					<div class="input-field col s4">
						{{ Form::label('cursoAlumno','Curso',(['class'=>'active','for'=>''])) }}<h5>{{$curso->curso}}</h5>
					</div>
				@endforeach
				<div class="input-field col s12">
				<a href="{{route('alumnos.show',$alumno->id)}}" class="btn green darken-4">Ver más</a>
			</div>
			@endforeach
		</div>
	</div>

@endsection