@extends('home')

@section('contenido')

<<<<<<< HEAD
		<a href="#modalBuscarMateria" class="waves-effect waves-light btn modal-trigger"><i class="material-icons">search</i></a>
	</div>

	<blockquote class="blockquote text-center"><h1>Lista Materias</h1></blockquote>

	<div class="card-panel hoverable green lighten-4">

	<table class="highlight">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($materias as $materia)
			
			<tr>
				<td>{{$materia->id}}</td>
				<td>{{$materia->nombre}}</td>
				<td>
					<div class="btn-group btn-group-justified">
						<a href="{{route('materias.show',$materia->id)}}" class="btn green darken-4">Ver más</a>

						<a href="{{route('materias.edit',$materia->id)}}" class="btn green darken-4">Edit</a>

						{!!Form::open(['route'=>['materias.destroy',$materia->id],'method'=>'DELETE'])!!}
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
	<div id="modalBuscarMateria" class="modal">
		<div class="modal-content">
			{!! Form::open(['action' => 'MateriasController@buscar','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}
			
				<div class="row">
					<div class="input-field col s4">
			    		{{ Form::label('busqueda','Materia',(['class'=>'active','for'=>'busqueda'])) }}
			    		{{ Form::text('busqueda','',(['class'=>'validate'])) }}
					</div>
=======
	<div class="row" id="crud_materias">
		<div class="margin">

			<div class="fixed-action-btn" id="boton">
		  		<a class="btn-floating btn-large green waves-effect waves-light modal-trigger" href="#nuevo"><i class="fas fa-plus fa-lg"></i></a>
			</div>

				<blockquote><h1>Materias</h1></blockquote>

				<table class="striped">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Docente</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="materia in materias">
							<td>@{{materia.nombre}}</td>
							<td></td>
							<td>
								<div class="btn-group" role="group">
						      <a class="btn blue"><i class="fas fa-print fa-lg"></i></a>
						      <a class="btn green"><i class="fas fa-pen fa-lg"></i></a>
									<a class="btn red darken-4" v-on:click.prevent="deleteMateria(materia)"><i class="fas fa-trash fa-lg"></i></a>
						    </div>
							</td>
						</tr>
					</tbody>
				</table>

				<div>
					@include('materias.create')
>>>>>>> 36b32d22cd8cdcff7f25b23d584759de12abf793
				</div>
			
		</div>
	</div>

@endsection