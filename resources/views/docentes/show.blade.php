@extends('inicio')

@section('contenido')
	
	<div class="card-panel hoverable green lighten-4">
		<div class="row">
		
			<div class="input-field col s4">
				{{ Form::label('id','ID',(['class'=>'active','for'=>''])) }} 
				<h5>{{$docente->id}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('cuil','Cuil',(['class'=>'active','for'=>''])) }}
				<h5>{{$docente->cuil}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('apellido','Apellido',(['class'=>'active','for'=>''])) }}
				<h5>{{$docente->apellido}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('nombre','Nombre',(['class'=>'active','for'=>''])) }}
				<h5>{{$docente->nombre}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('matricula','Matricula',(['class'=>'active','for'=>''])) }}
				<h5>{{$docente->matricula}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('titulo','Titulo',(['class'=>'active','for'=>''])) }}
				<h5>{{$docente->titulo}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('direccion','Direccion',(['class'=>'active','for'=>''])) }}
				<h5>{{$docente->direccion}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('telefono','Telefono',(['class'=>'active','for'=>''])) }}
				<h5>{{$docente->telefono}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('email','Email',(['class'=>'active','for'=>''])) }}
				<h5>{{$docente->email}}</h5>
			</div>
		</div>
	</div>

	<div class="row">
		<a href="{{route('descargarDocente',$docente->id)}}" class="btn green darken-4">Descargar</a>
	</div>

@endsection