@extends('inicio')

@section('contenido')
	<div class="card-panel hoverable green lighten-4">
		<div class="row">
			<div class="input-field col s4">
				{{ Form::label('id','ID',(['class'=>'active','for'=>''])) }}
				<h5>{{$materia->id}}</h5>
			</div>
			
			<div class="input-field col s4">
				{{ Form::label('nombre','Nombre',(['class'=>'active','for'=>''])) }}
				<h5>{{$materia->nombre}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('docente','Docente',(['class'=>'active','for'=>''])) }}
				@foreach($materia->docentes as $docente)
					<h5>{{$docente->cuil}} - {{$docente->apellido}} {{$docente->nombre}}</h5>
				@endforeach
			</div>
		</div>
	</div>

	<div class="row">
		<a href="{{route('descargarMateria',$materia->id)}}" class="btn green darken-4">Descargar</a>
	</div>

@endsection