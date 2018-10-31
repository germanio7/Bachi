@extends('home')

@section('contenido')
	
	<div class="fixed-action-btn">
		<a href="{{route('docentes.create')}}" class="btn-floating btn-large green"><i class="material-icons">add</i>>Agregar Docente</a>

		<a href="#modalBuscarDocente" class="waves-effect waves-light btn modal-trigger"><i class="material-icons">search</i></a>
	</div>

	<blockquote class="blockquote text-center"><h1>Lista Docentes</h1></blockquote>
	
	<div class="card-panel hoverable green lighten-4">

	<table class="highlight">
		<thead>
			<tr>
				<th>ID</th>
				<th>Cuil</th>
				<th>Apellido</th>
				<th>Nombre</th>
				<th>Matricula</th>
				<th>Titulo</th>
				<th>Direccion</th>
				<th>Telefono</th>
				<th>Email</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($docentes as $docente)
			
			<tr>
				<td>{{$docente->id}}</td>
				<td>{{$docente->cuil}}</td>
				<td>{{$docente->apellido}}</td>
				<td>{{$docente->nombre}}</td>
				<td>{{$docente->matricula}}</td>
				<td>{{$docente->titulo}}</td>
				<td>{{$docente->direccion}}</td>
				<td>{{$docente->telefono}}</td>
				<td>{{$docente->email}}</td>
				<td>
					<div class="btn-group btn-group-justified">
						<a href="{{route('docentes.show',$docente->id)}}" class="btn green darken-4">Ver más</a>
						
						{!!Form::open(['route'=>['docentes.destroy',$docente->id],'method'=>'DELETE'])!!}
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
	<div id="modalBuscarDocente" class="modal">
		<div class="modal-content">
			
			{!! Form::open(['action' => 'DocentesController@buscar','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}
			
				<div class="row">
					<div class="input-field col s4">
			    		{{ Form::label('busqueda','Cuil, Apellido, Nombre, Matricula',(['class'=>'active','for'=>'busqueda'])) }}
			    		{{ Form::text('busqueda','',(['class'=>'validate'])) }}
					</div>
				</div>

			{{ Form::submit('Buscar',(['class'=>'btn green',])) }}
	    	
			{!! Form::close() !!}
			
		</div>
	</div>

@endsection