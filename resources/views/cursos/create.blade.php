@extends('home')

@section('contenido')

	<h1>Nuevo Curso</h1>
	
	<div class="card-panel hoverable green lighten-4">

		{!! Form::open(['action' => 'CursosController@store','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}
			
			<div class="row">
				<div class="input-field col s4">
		    		{{ Form::label('curso','Curso',(['class'=>'active','for'=>'curso'])) }}
		    		{{ Form::text('curso','',(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		<select name="orientacion" class="input-field col s3">
			    		<option value="" disabled selected>Orientación</option>
			      		<option value="Ciclo Basico">Ciclo Básico</option>
			      		<option value="Ciencias Sociales">Ciencias Sociales</option>
			      		<option value="Educacion Fisica">Educación Física</option>
			    	</select>
				</div>

				<div class="input-field col s4">
		    		<select name="turno" class="input-field col s3">
			    		<option value="" disabled selected>Turno</option>
			      		<option value="Mañana">Mañana</option>
			      		<option value="Tarde">Tarde</option>
			    	</select>
				</div>
			</div>

			{{ Form::submit('Guardar',(['class'=>'btn green'])) }}
	    	
		{!! Form::close() !!}

	</div>

@endsection