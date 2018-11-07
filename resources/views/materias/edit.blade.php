@extends('home')

@section('contenido')

	<h1>Editor de Materia</h1>

	<div class="card-panel hoverable green lighten-4">

		{!! Form::open(['action' => ['MateriasController@update',$materia->id],'method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}
			
			<div class="row">
				<div class="input-field col s4">
		    		{{ Form::label('nombre','Nombre',(['class'=>'active','for'=>'nombre'])) }}
		    		{{ Form::text('nombre',$materia->nombre,(['class'=>'validate'])) }}
				</div>

			</div>

			{{Form::hidden('_method','PUT')}}

			{{ Form::submit('Guardar',(['class'=>'btn green',])) }}
	    	
		{!! Form::close() !!}

	</div>

@endsection