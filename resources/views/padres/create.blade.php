@extends('inicio')

@section('contenido')

	<h1>Nuevo Padre</h1>

	<div class="card-panel hoverable green lighten-4">

		{!! Form::open(['action' => 'PadresController@store','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}
			
			<div class="row">
				<div class="input-field col s4">
		    		<select name="alumno_id" class="input-field col s3">
					<option value="" disabled selected>Elegir Alumno</option>
					@foreach($alumnos as $alum)
			      		<option value="{{$alum->id}}">{{$alum->cuil}} - {{$alum->apellido}} {{$alum->nombre}}</option>
		      		@endforeach
		    	</select>
				</div>

				<div class="input-field col s4">
		    		<select name="madre_padre" class="input-field col s3">
			    		<option value="" disabled selected>Parentesco</option>
			      		<option value="0">Madre</option>
			      		<option value="1">Padre</option>
			    	</select>
				</div>
				
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
		    		<select name="a_cargo" class="input-field col s3">
			    		<option value="" disabled selected>A Cargo</option>
			      		<option value="0">No</option>
			      		<option value="1">Si</option>
			    	</select>
				</div>

				<div class="input-field col s4">
		    		<select name="es_tutor" class="input-field col s3">
			    		<option value="" disabled selected>Es Tutor</option>
			      		<option value="0">No</option>
			      		<option value="1">Si</option>
			    	</select>
				</div>

				<div class="input-field col s4">
		    		<select name="patria_potestad" class="input-field col s3">
			    		<option value="" disabled selected>Patria Potestad</option>
			      		<option value="0">No</option>
			      		<option value="1">Si</option>
			    	</select>
				</div>

				<div class="input-field col s4">
		    		<select name="vive_con_alumno" class="input-field col s3">
			    		<option value="" disabled selected>Vive con Alumno</option>
			      		<option value="0">No</option>
			      		<option value="1">Si</option>
			    	</select>
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('ocupacion','Ocupacion',(['class'=>'active','for'=>'ocupacion'])) }}
		    		{{ Form::text('ocupacion','',(['class'=>'validate'])) }}
				</div>

			</div>

			{{ Form::submit('Guardar',(['class'=>'btn green',])) }}
	    	
		{!! Form::close() !!}

	</div>

@endsection