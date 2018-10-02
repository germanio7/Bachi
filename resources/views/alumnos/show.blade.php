@extends('home')

@section('contenido')
	
	<div class="card-panel hoverable green lighten-4">
		<div class="row">
			<div class="input-field col s4">
				{{ Form::label('cuil','Cuil',(['class'=>'active','for'=>''])) }}
				<h5>{{$alumno->cuil}}</h5>
			</div>
			<div class="input-field col s4">
				{{ Form::label('apellido','Apellido',(['class'=>'active','for'=>''])) }}
				<h5>{{$alumno->apellido}}</h5>
			</div>	
			<div class="input-field col s4">
				{{ Form::label('nombre','Nombre',(['class'=>'active','for'=>''])) }}
				<h5>{{$alumno->nombre}}</h5>
			</div>
			<div class="input-field col s4">
				@if(is_null($curso))
					{{ Form::label('curso','Curso',(['class'=>'active','for'=>''])) }}
					<h5>{{$curso}}</h5>
				@else
					{{ Form::label('curso','Curso',(['class'=>'active','for'=>''])) }}
					<h5>{{$curso->curso}}</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('anio','Año',(['class'=>'active','for'=>''])) }}
				<h5>{{$anio}}</h5>
			</div>

			<div class="input-field col s4">
				<a href="#modalNotas" class="waves-effect waves-light btn modal-trigger">Notas</a>
			</div>

			<div class="input-field col s4">
				<a href="{{route('descargarAlumno',$alumno->id)}}" class="btn green darken-4">Descargar</a>
			</div>
		</div>
	</div>


	{{-- Estructura Modal --}}
	<div id="modalNotas" class="modal lime lighten-4">
		<div class="modal-content">
			{{ Form::label('calificaciones','Calificaciones del Alumno: ',(['class'=>'active','for'=>'direccion'])) }}
			<h5>{{$alumno->nombre}} {{$alumno->apellido}}</h5>

			<div class="card-panel hoverable">

			<table class="highlight">
				<thead>
					<tr>
						<th>Materia</th>
						<th>1_trimestre</th>
						<th>2_trimestre</th>
						<th>3_trimestre</th>
						<th>Integral</th>
						<th>Diciembre</th>
						<th>Marzo</th>
						<th>Final</th>
					</tr>
				</thead>
				<tbody>

					@if(is_null($curso))
						El alumno no está inscripto en ningun Curso
					@else
						@foreach($curso->materias as $materia)
							<tr>
								<td>{{$materia->nombre}}</td>		
								<td>
									{{ Form::text('1_trimestre','',(['class'=>'validate'])) }}
								</td>
								<td>
									{{ Form::text('2_trimestre','',(['class'=>'validate'])) }}
								</td>
								<td>
									{{ Form::text('3_trimestre','',(['class'=>'validate'])) }}
								</td>
								<td>
									{{ Form::text('integarl','',(['class'=>'validate'])) }}
								</td>
								<td>
									{{ Form::text('diciembre','',(['class'=>'validate'])) }}
								</td>
								<td>
									{{ Form::text('marzo','',(['class'=>'validate'])) }}
								</td>
								<td>
									{{ Form::text('final','',(['class'=>'validate'])) }}
								</td>
							</tr>
						@endforeach
					@endif

					
				</tbody>
			</table>
		</div>
		<div class="modal-footer">
			<a href="{{-- {{'cursos.agregarAlumno','$alum->id'}} --}}" class="modal-close waves-effect waves-green btn-flat">Almacenar</a>
		</div>
	</div>

@endsection