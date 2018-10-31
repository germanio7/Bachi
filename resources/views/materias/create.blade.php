@extends('home')

@section('contenido')

	<h1>Nueva Materia</h1>

	<div class="card-panel hoverable green lighten-4">

		{!! Form::open(['action' => 'MateriasController@store','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}
			
			<div class="row">
				<div class="input-field col s4">
		    		{{ Form::label('nombre','Nombre',(['class'=>'active','for'=>'nombre'])) }}
		    		{{ Form::text('nombre','',(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s6">
		    		<select name="docente_id" class="input-field col s3">
					<option value="" disabled selected>Elegir Docente</option>
						@foreach($docentes as $docente)
				      		<option value="{{$docente->id}}">Matricula: {{$docente->matricula}} - {{$docente->apellido}} {{$docente->nombre}} -Titulo: {{$docente->titulo}}</option>
			      		@endforeach
		    		</select>
				</div>
			</div>

			{{ Form::submit('Guardar',(['class'=>'btn green',])) }}
	    	
		{!! Form::close() !!}

	</div>

@endsection