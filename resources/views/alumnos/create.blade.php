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
		    		{{ Form::label('fechaNacimiento','Fecha Nacimiento',(['class'=>'active','for'=>'fechaNacimiento'])) }}
		    		{{ Form::text('fechaNacimiento','',(['class'=>'datepicker'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('lugarNacimiento','Lugar Nacimiento',(['class'=>'active','for'=>'lugarNacimiento'])) }}
		    		{{ Form::text('lugarNacimiento','',(['class'=>'validate'])) }}
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
			</div>

		{{ Form::submit('Guardar',(['class'=>'btn green'])) }}
    	
		{!! Form::close() !!}

	</div>

@endsection