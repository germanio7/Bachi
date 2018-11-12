@extends('home')

@section('contenido')

	<h1>Editor de Curso</h1>
	
	<div class="card-panel hoverable green lighten-4">

		{!! Form::open(['action' => ['CursosController@update',$curso->id],'method'=>'POST','file'=>true,'enctype'=>'multipart/form-data','class'=>'form']) !!}
			
			<div class="row">
				<div class="input-field col s4">
		    		{{ Form::label('curso','Curso',(['class'=>'active','for'=>'curso'])) }}
		    		{{ Form::text('curso',$curso->curso,(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		{{ Form::label('orientacion','Orientacion',(['class'=>'active','for'=>'orientacion'])) }}
		    		{{ Form::text('orientacion',$curso->orientacion,(['class'=>'validate'])) }}
				</div>

				<div class="input-field col s4">
		    		<select name="turno" class="input-field col s3">
			    		<option value="{{$curso->turno}}">{{$curso->turno}}</option>
			    		@if($curso->turno == "Mañana") {
			    			<option value="Tarde">Tarde</option>
			    		}@else {
			    		<option value="Mañana">Mañana</option>
			    		}

			    		@endif
			      		
			      		
			    	</select>
				</div>
			</div>

			{{Form::hidden('_method','PUT')}}

			{{ Form::submit('Guardar',(['class'=>'btn green'])) }}
	    	
		{!! Form::close() !!}

	</div>

@endsection