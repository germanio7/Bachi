@extends('home')

@section('contenido')

	<h1>Editor de Docente</h1>

	<div class="card-panel hoverable green lighten-4">

		{!! Form::open(['action' => ['DocentesController@update', $docente->id],'method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}
			
			<div class="row">
				<div class="input-field col s4">
		    		{{ Form::label('cuil','Cuil',(['class'=>'active','for'=>'cuil'])) }}
		    		{{ Form::text('cuil',$docente->cuil,(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('apellido','Apellido',(['class'=>'active','for'=>'apellido'])) }}
		    		{{ Form::text('apellido',$docente->apellido,(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('nombre','Nombre',(['class'=>'active','for'=>'nombre'])) }}
		    		{{ Form::text('nombre',$docente->nombre,(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('matricula','Matricula',(['class'=>'active','for'=>'matricula'])) }}
		    		{{ Form::text('matricula',$docente->matricula,(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('titulo','Titulo',(['class'=>'active','for'=>'titulo'])) }}
		    		{{ Form::text('titulo',$docente->titulo,(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('direccion','Direccion',(['class'=>'active','for'=>'direccion'])) }}
		    		{{ Form::text('direccion',$docente->direccion,(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('telefono','Telefono',(['class'=>'active','for'=>'telefono'])) }}
		    		{{ Form::text('telefono',$docente->telefono,(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('email','Email',(['class'=>'active','for'=>'email'])) }}
		    		{{ Form::text('email',$docente->email,(['class'=>'validate'])) }}
				</div>
			</div>

			{{Form::hidden('_method','PUT')}}

			{{ Form::submit('Guardar',(['class'=>'btn green'])) }}
	    	
		{!! Form::close() !!}

	</div>

@endsection