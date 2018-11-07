@extends('home')

@section('contenido')

	<h1>Editor de Curso</h1>
	
	<div class="card-panel hoverable green lighten-4">

		{!! Form::open(['action' => ['PadresController@update',$padre->id],'method'=>'POST','file'=>true,'enctype'=>'multipart/form-data','class'=>'form']) !!}
			
			<div class="row">

				<div class="input-field col s4">
					{{ Form::label('madre_padre','Madre o Padre',(['class'=>'active','for'=>'madre_padre'])) }}
		    		<select name="madre_padre" class="input-field col s3">
		    			@if($padre->madre_padre != "0") {
							<option value="1">Padre</option>
		    			}@else{<option value="0">Padre</option>}
		    			@endif
			    		@if($padre->madre_padre == "0") {
							<option value="1">Padre</option>
			    		}@else{ <option value="0">Madre</option>}
			      		@endif
			    	</select>
				</div>

				
				<div class="input-field col s4">
		    		{{ Form::label('cuil','Cuil',(['class'=>'active','for'=>'cuil'])) }}
		    		{{ Form::text('cuil',$padre->cuil,(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('apellido','Apellido',(['class'=>'active','for'=>'apellido'])) }}
		    		{{ Form::text('apellido',$padre->apellido,(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('nombre','Nombre',(['class'=>'active','for'=>'nombre'])) }}
		    		{{ Form::text('nombre',$padre->nombre,(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('fecha_nacimiento','Fecha Nacimiento',(['class'=>'active','for'=>'fecha_nacimiento'])) }}
		    		{{ Form::date('fecha_nacimiento',$padre->fecha_nacimiento,(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('lugar_nacimiento','Lugar Nacimiento',(['class'=>'active','for'=>'lugar_nacimiento'])) }}
		    		{{ Form::text('lugar_nacimiento',$padre->lugar_nacimiento,(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('nacionalidad','Nacionalidad',(['class'=>'active','for'=>'nacionalidad'])) }}
		    		{{ Form::text('nacionalidad',$padre->nacionalidad,(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('direccion','Direccion',(['class'=>'active','for'=>'direccion'])) }}
		    		{{ Form::text('direccion',$padre->direccion,(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
					{{ Form::label('a_cargo','A Cargo',(['class'=>'active','for'=>'a_cargo'])) }}
		    		<select name="a_cargo" class="input-field col s3">
		    			@if($padre->a_cargo != "0") {
							<option value="1">Si</option>
			    		}@else{ <option value="0">No</option>}
			      		@endif
			    		@if($padre->a_cargo == "0") {
							<option value="1">Si</option>
			    		}@else{ <option value="0">No</option>}
			      		@endif
			    	</select>
				</div>

				<div class="input-field col s4">
					{{ Form::label('es_tutor','Es Tutor',(['class'=>'active','for'=>'es_tutor'])) }}
		    		<select name="es_tutor" class="input-field col s3">
		    			@if($padre->es_tutor != "0") {
							<option value="1">Si</option>
			    		}@else{ <option value="0">No</option>}
			      		@endif
			    		@if($padre->es_tutor == "0") {
							<option value="1">Si</option>
			    		}@else{ <option value="0">No</option>}
			      		@endif
			    	</select>
				</div>

				<div class="input-field col s4">
					{{ Form::label('patria_potestad','Patria Potestad',(['class'=>'active','for'=>'patria_potestad'])) }}
		    		<select name="patria_potestad" class="input-field col s3">
		    			@if($padre->patria_potestad != "0") {
							<option value="1">Si</option>
			    		}@else{ <option value="0">No</option>}
			      		@endif
			    		@if($padre->patria_potestad == "0") {
							<option value="1">Si</option>
			    		}@else{ <option value="0">No</option>}
			      		@endif
			    	</select>
				</div>

				<div class="input-field col s4">
					{{ Form::label('vive_con_alumno','Vive Con Alumno',(['class'=>'active','for'=>'vive_con_alumno'])) }}
		    		<select name="vive_con_alumno" class="input-field col s3">
		    			@if($padre->vive_con_alumno != "0") {
							<option value="1">Si</option>
			    		}@else{ <option value="0">No</option>}
			      		@endif
			    		@if($padre->vive_con_alumno == "0") {
							<option value="1">Si</option>
			    		}@else{ <option value="0">No</option>}
			      		@endif
			    	</select>
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('ocupacion','Ocupacion',(['class'=>'active','for'=>'ocupacion'])) }}
		    		{{ Form::text('ocupacion',$padre->ocupacion,(['class'=>'validate'])) }}
				</div>

			</div>

			{{Form::hidden('_method','PUT')}}

			{{ Form::submit('Guardar',(['class'=>'btn green'])) }}
	    	
		{!! Form::close() !!}

	</div>

@endsection