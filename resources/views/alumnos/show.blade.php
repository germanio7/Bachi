@extends('home')

@section('contenido')
	
	<div class="card-panel hoverable green lighten-4">
		<b>Datos del Alumno</b>
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
				{{ Form::label('fecha_nacimiento','Fecha Nacimiento',(['class'=>'active','for'=>''])) }}
				<h5>{{$alumno->fecha_nacimiento}}</h5>
			</div>
			<div class="input-field col s4">
				{{ Form::label('lugar_nacimiento','Lugar Nacimiento',(['class'=>'active','for'=>''])) }}
				<h5>{{$alumno->lugar_nacimiento}}</h5>
			</div>
			<div class="input-field col s4">
				{{ Form::label('nacionalidad','Nacionalidad',(['class'=>'active','for'=>''])) }}
				<h5>{{$alumno->nacionalidad}}</h5>
			</div>
			<div class="input-field col s4">
				{{ Form::label('direccion','Direccion',(['class'=>'active','for'=>''])) }}
				<h5>{{$alumno->direccion}}</h5>
			</div>
			<div class="input-field col s4">
				{{ Form::label('telefono','Telefono',(['class'=>'active','for'=>''])) }}
				<h5>{{$alumno->telefono}}</h5>
			</div>
			<div class="input-field col s4">
				{{ Form::label('email','Email',(['class'=>'active','for'=>''])) }}
				<h5>{{$alumno->email}}</h5>
			</div>
			<div class="input-field col s4">
				{{ Form::label('asignacion_universal','Asignacion Universal',(['class'=>'active','for'=>''])) }}
				@if($alumno->asignacion_universal=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('salario_familiar','Salirio Familiar',(['class'=>'active','for'=>''])) }}
				@if($alumno->salario_familiar=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('pueblo_originario','Pueblo Originario',(['class'=>'active','for'=>''])) }}
				@if($alumno->pueblo_originario=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('programa_cai','Programa CAI',(['class'=>'active','for'=>''])) }}
				@if($alumno->programa_cai=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('discapacidad','Discapacidad',(['class'=>'active','for'=>''])) }}
				@if($alumno->discapacidad=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('diabetes','Diabetes',(['class'=>'active','for'=>''])) }}
				@if($alumno->diabetes=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('hernias','Hernias',(['class'=>'active','for'=>''])) }}
				@if($alumno->hernias=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('convulsiones','Convulsiones',(['class'=>'active','for'=>''])) }}
				@if($alumno->convulsiones=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('problemas_respiratorios','Problemas Respiratorios',(['class'=>'active','for'=>''])) }}
				@if($alumno->problemas_respiratorios=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('problemas_cardiacos','Problemas Cardiacos',(['class'=>'active','for'=>''])) }}
				@if($alumno->problemas_cardiacos=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('alergias','Alergias',(['class'=>'active','for'=>''])) }}
				@if($alumno->alergias=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('esguinces','Esguinces',(['class'=>'active','for'=>''])) }}
				@if($alumno->esguinces=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('enfermedades_infectocontagiosas','Enfermedades Infectocontagiosas',(['class'=>'active','for'=>''])) }}
				@if($alumno->enfermedades_infectocontagiosas=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('incapacidad','Incapacidad',(['class'=>'active','for'=>''])) }}
				@if($alumno->incapacidad=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('otros','Otros',(['class'=>'active','for'=>''])) }}
				<h5>{{$alumno->otros}}</h5>
			</div>
			<div class="input-field col s4">
				{{ Form::label('certificado_salud','Certificado Salud',(['class'=>'active','for'=>''])) }}
				@if($alumno->certificado_salud=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('certificado_dental','Certificado Dental',(['class'=>'active','for'=>''])) }}
				@if($alumno->certificado_dental=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('carnet_vacuna','Carnet Vacuna',(['class'=>'active','for'=>''])) }}
				@if($alumno->carnet_vacuna=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('grupo_sanguineo','Grupo Sanguineo',(['class'=>'active','for'=>''])) }}
				@if($alumno->grupo_sanguineo=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('certificado_nivel_inicial','Certificado Nivel Inicial',(['class'=>'active','for'=>''])) }}
				@if($alumno->certificado_nivel_inicial=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('fotocopia_dni','Fotocopia DNI',(['class'=>'active','for'=>''])) }}
				@if($alumno->fotocopia_dni=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>
			<div class="input-field col s4">
				{{ Form::label('cooperadora','Cooperadora',(['class'=>'active','for'=>''])) }}
				@if($alumno->cooperadora=0)
					<h5>NO</h5>
				@else
					<h5>SI</h5>
				@endif
			</div>

			<div class="input-field col s12">
				<a href="{{route('descargarAlumno',$alumno->id)}}" class="btn green darken-4">Descargar</a>
			</div>
		</div>
	</div>

	<div class="card-panel hoverable green lighten-4">
		<b>Datos del Curso</b>
		<div class="row">
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
			
			<div class="container">
				
				<div class="input-field col s4">
					<a href="#modalAgregarNotas" class="waves-effect waves-light btn modal-trigger">Agregar Notas</a>
				</div>
				
				<div class="input-field col s4">
					<a href="#modelVerNotas" class="waves-effect waves-light btn modal-trigger">Ver Notas</a>
				</div>
				
				<div class="input-field col s4">
					<a href="#modelVerAsistencia" class="waves-effect waves-light btn modal-trigger">Ver Asistencias</a>
				</div>
			</div>

			
		</div>
	</div>

	<div class="card-panel hoverable green lighten-4">
		<b>Datos Del Tutor</b>
		<div class="row">
			<div class="input-field col s4">
				{{ Form::label('cuilPadre','Cuil',(['class'=>'active','for'=>''])) }}<h5>{{$alumno->padre->cuil}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('apellidoPadre','Apellido',(['class'=>'active','for'=>''])) }}<h5>{{$alumno->padre->apellido}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('nombrePadre','Nombre',(['class'=>'active','for'=>''])) }}<h5>{{$alumno->padre->nombre}}</h5>
			</div>

			<div class="input-field col s12">
				<a href="{{route('padres.show',$alumno->padre->id)}}" class="btn green darken-4">Ver más</a>
			</div>
		</div>
	</div>


	{{-- Estructura Modal --}}
	<div id="modalAgregarNotas" class="modal lime lighten-4">
		<div class="modal-content">
			{!! Form::open(['action' => 'NotasController@store','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}
				{{ Form::label('calificaciones','Calificaciones del Alumno: ',(['class'=>'active','for'=>''])) }}
				<h5>{{$alumno->nombre}} {{$alumno->apellido}}</h5>
				<input name="alumno_id" value="{{$alumno->id}}" type="hidden">

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
								@foreach($materias as $materia)
									<tr>
										<input name="materia_id" value="{{$materia->id}}" type="hidden">
										<td>{{$materia->nombre}}</td>		
										<td>
											{{ Form::text('primer_trimestre','',(['class'=>'validate'])) }}
										</td>
										<td>
											{{ Form::text('segundo_trimestre','',(['class'=>'validate'])) }}
										</td>
										<td>
											{{ Form::text('tercer_trimestre','',(['class'=>'validate'])) }}
										</td>
										<td>
											{{ Form::text('integral','',(['class'=>'validate'])) }}
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
					{{ Form::submit('Alamacenar',(['class'=>'btn green'])) }}
				</div>
			{!! Form::close() !!}
	</div>
	</div>

	<div id="modelVerNotas" class="modal lime lighten-4">
		<div class="modal-content">
			{{ Form::label('calificaciones','Calificaciones del Alumno: ',(['class'=>'active','for'=>''])) }}
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
								@foreach($notas as $nota)
									<tr>
										@foreach($nota->materias as $materia)
											<td>{{$materia->nombre}}</td>
										@endforeach
										<td>{{$nota->primer_trimestre}}</td>
										<td>{{$nota->segundo_trimestre}}</td>
										<td>{{$nota->tercer_trimestre}}</td>
										<td>{{$nota->integral}}</td>
										<td>{{$nota->diciembre}}</td>
										<td>{{$nota->marzo}}</td>
										<td>{{$nota->final}}</td>
									</tr>
								@endforeach
							@endif					
						</tbody>
					</table>
				</div>
		</div>
	</div>

	<div id="modelVerAsistencia" class="modal lime lighten-4">
		<div class="modal-content">
			{{ Form::label('asistencias','Asistencias del Alumno: ',(['class'=>'active','for'=>''])) }}
				<h5>{{$alumno->nombre}} {{$alumno->apellido}}</h5>

				<div class="card-panel hoverable">

					<table class="highlight">
						<thead>
							<tr>
								<th>Fecha</th>
								<th>Asistencia</th>
								<th>Comentario</th>
							</tr>
						</thead>
						<tbody>

							@if(is_null($curso))
								El alumno no está inscripto en ningun Curso
							@else
								@foreach($asistencias as $asistencia)
									<tr>
										<td>{{$asistencia->fecha}}</td>
										@if($asistencia->asistencia='0')
											<td>Ausente</td>
										@elseif($asistencia->asistencia='1')
											<td>Presente</td>
										@elseif($asistencia->asistencia='0.5')
											<td>Tardanza</td>	
										@endif
										<td>{{$asistencia->comentario}}</td>
									</tr>
								@endforeach
							@endif					
						</tbody>
					</table>
				</div>
		</div>
	</div>

@endsection