@extends('home')

@section('contenido')


	<h1>Nuevo Alumno</h1>

		<div class="card-panel hoverable green lighten-4">


		{!! Form::open(['action' => 'AlumnosController@store','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}
			
			<div class="row">
				<div class="input-field col s4">
		    		{{ Form::label('cuil','Cuil',(['class'=>'active','for'=>'cuil'])) }}
		    		{{ Form::text('cuil','',(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('apellido','Apellido',(['class'=>'active','for'=>'apellido'])) }}
		    		{{ Form::text('apellido','',(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('nombre','Nombre',(['class'=>'active','for'=>'nombre'])) }}
		    		{{ Form::text('nombre','',(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('fecha_nacimiento','Fecha Nacimiento',(['class'=>'active','for'=>'fecha_nacimiento'])) }}
		    		{{ Form::date('fecha_nacimiento','',(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('lugar_nacimiento','Lugar Nacimiento',(['class'=>'active','for'=>'lugar_nacimiento'])) }}
		    		{{ Form::text('lugar_nacimiento','',(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('nacionalidad','Nacionalidad',(['class'=>'active','for'=>'nacionalidad'])) }}
		    		{{ Form::text('nacionalidad','',(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('direccion','Direccion',(['class'=>'active','for'=>'direccion'])) }}
		    		{{ Form::text('direccion','',(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('telefono','Telefono',(['class'=>'active','for'=>'telefono'])) }}
		    		{{ Form::text('telefono','',(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('email','Email',(['class'=>'active','for'=>'email'])) }}
		    		{{ Form::text('email','',(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s3">
		    		<select name="asignacion_universal" class="input-field col s3">
			    		<option value="" disabled selected>Asignación Universal</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>

				<div class="input-field col s3">
		    		<select name="salario_familiar" class="input-field col s3">
			    		<option value="" disabled selected>Salario Familiar</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>

				<div class="input-field col s3">
		    		<select name="pueblo_originario" class="input-field col s3">
			    		<option value="" disabled selected>Pueblo Originario</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>

				<div class="input-field col s3">
		    		<select name="programa_cai" class="input-field col s3">
			    		<option value="" disabled selected>Programa CAI</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>

				<div class="input-field col s3">
		    		<select name="discapacidad" class="input-field col s3">
			    		<option value="" disabled selected>Discapacidad</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>

				<div class="input-field col s3">
		    		<select name="diabetes" class="input-field col s3">
			    		<option value="" disabled selected>Diabetes</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>

				<div class="input-field col s3">
		    		<select name="hernias" class="input-field col s3">
			    		<option value="" disabled selected>Hernias</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>

				<div class="input-field col s3">
		    		<select name="convulsiones" class="input-field col s3">
			    		<option value="" disabled selected>Convulsiones</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>

				<div class="input-field col s3">
		    		<select name="problemas_respiratorios" class="input-field col s3">
			    		<option value="" disabled selected>Problemas Respiratorios</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>

				<div class="input-field col s3">
		    		<select name="problemas_cardiacos" class="input-field col s3">
			    		<option value="" disabled selected>Problemas Cardiacos</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>

				<div class="input-field col s3">
		    		<select name="alergias" class="input-field col s3">
			    		<option value="" disabled selected>Alergias</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>

				<div class="input-field col s3">
		    		<select name="esguinces" class="input-field col s3">
			    		<option value="" disabled selected>Esguinces</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>

				<div class="input-field col s3">
		    		<select name="enfermedades_infectocontagiosas" class="input-field col s3">
			    		<option value="" disabled selected>Enfermedades Infectocontagiosas</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>

				<div class="input-field col s3">
		    		<select name="incapacidad" class="input-field col s3">
			    		<option value="" disabled selected>Incapacidad</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>

				<div class="input-field col s3">
		    		{{ Form::label('otros','Otros',(['class'=>'active','for'=>'otros'])) }}
		    		{{ Form::text('otros','',(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s3">
		    		<select name="certificado_salud" class="input-field col s3">
			    		<option value="" disabled selected>Certificado Salud</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>

				<div class="input-field col s3">
		    		<select name="certificado_dental" class="input-field col s3">
			    		<option value="" disabled selected>Certificado Dental</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>

				<div class="input-field col s3">
		    		<select name="carnet_vacuna" class="input-field col s3">
			    		<option value="" disabled selected>Carnet Vacuna</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>

				<div class="input-field col s3">
		    		<select name="grupo_sanguineo" class="input-field col s3">
			    		<option value="" disabled selected>Grupo Sanguineo</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>

				<div class="input-field col s3">
		    		<select name="certificado_nivel_inicial" class="input-field col s3">
			    		<option value="" disabled selected>Certificado Nivel Inicial</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>

				<div class="input-field col s3">
		    		<select name="fotocopia_dni" class="input-field col s3">
			    		<option value="" disabled selected>Fotocopia DNI</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>

				<div class="input-field col s3">
		    		<select name="contribucion_cooperadora" class="input-field col s3">
			    		<option value="" disabled selected>Contribución Cooperadora</option>
			      		<option value="0">NO</option>
			      		<option value="1">SI</option>
			    	</select>
				</div>


			</div>

		{{ Form::submit('Guardar',(['class'=>'btn green'])) }}
    	
		{!! Form::close() !!}

	</div>

@endsection