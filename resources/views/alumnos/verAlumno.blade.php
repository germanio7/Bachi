<blockquote class="blockquote text-center"><h3>E.E.S. Nº. 9 "Maestro Sarmiento"</h3></blockquote>

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
		</div>
	</div>