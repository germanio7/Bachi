@extends('home')

@section('contenido')
	<div class="fixed-action-btn">
		<a href="{{route('padres.create')}}" class="btn-floating btn-large green"><i class="material-icons">add</i>>Agregar Padre</a>

		<a href="#modalBuscarPadre" class="waves-effect waves-light btn modal-trigger"><i class="material-icons">search</i></a>
	</div>

	<blockquote class="blockquote text-center"><h1>Lista Padres</h1></blockquote>
	
	<div class="card-panel hoverable green lighten-4">

	<table class="highlight">
		<thead>
			<tr>
				<th>ID</th>
				<th>Cuil</th>
				<th>Apellido</th>
				<th>Nombre</th>
				<th>Fecha Nacimiento</th>
				<th>Lugar Nacimiento</th>
				<th>Nacionalidad</th>
				<th>Direccion</th>
				<th>Ocupacion</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($padres as $padre)
			
			<tr>
				<td>{{$padre->id}}</td>
				<td>{{$padre->cuil}}</td>
				<td>{{$padre->apellido}}</td>
				<td>{{$padre->nombre}}</td>
				<td>{{$padre->fecha_nacimiento}}</td>
				<td>{{$padre->lugar_nacimiento}}</td>
				<td>{{$padre->nacionalidad}}</td>
				<td>{{$padre->direccion}}</td>
				<td>{{$padre->ocupacion}}</td>
				<td>
					<div class="btn-group btn-group-justified">
						<a href="{{route('padres.show',$padre->id)}}" class="btn green darken-4">Ver más</a>

						<a href="{{route('padres.edit',$padre->id)}}" class="btn green darken-4">edit</a>

						{!!Form::open(['route'=>['padres.destroy',$padre->id],'method'=>'DELETE'])!!}
							<button class="btn red darken-4">Eliminar</button>
						{!!Form::close()!!}
					</div>
				</td>
			</tr>
			
			@endforeach
		</tbody>
	</table>

	</div>

	{{-- Estructura Modal --}}
	<div id="modalBuscarPadre" class="modal">
		<div class="modal-content">
			{!! Form::open(['action' => 'PadresController@buscar','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}
			
				<div class="row">
					<div class="input-field col s4">
			    		{{ Form::label('busqueda','Cuil, Apellido o Nombre',(['class'=>'active','for'=>'busqueda'])) }}
			    		{{ Form::text('busqueda','',(['class'=>'validate'])) }}
					</div>
				</div>

			{{ Form::submit('Buscar',(['class'=>'btn green',])) }}
	    	
			{!! Form::close() !!}
		</div>
	</div>

@endsection