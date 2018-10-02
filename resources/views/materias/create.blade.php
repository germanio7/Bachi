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
			</div>

			{{ Form::submit('Guardar',(['class'=>'btn green',])) }}
	    	
		{!! Form::close() !!}

	</div>

@endsection