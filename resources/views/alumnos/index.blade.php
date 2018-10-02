@extends('home')

@section('contenido')

	<div class="fixed-action-btn">
		<a href="{{route('alumnos.create')}}" class="btn-floating btn-large green"><i class="material-icons">add</i></a>

		<a href="#modalBuscarAlumno" class="waves-effect waves-light btn modal-trigger"><i class="material-icons">search</i></a>

	</div>

	<blockquote class="blockquote text-center"><h1>Lista Alumnos</h1></blockquote>
	
	<div class="card-panel hoverable green lighten-4">

	<table class="highlight">
		<thead>
			<tr>
				<th class="hide-on-small-only">ID</th>
				<th>Cuil</th>
				<th>Apellido</th>
				<th>Nombre</th>
				<th>Fecha Nacimiento</th>
				<th>Lugar Nacimiento</th>
				<th>Nacionalidad</th>
				<th>Direccion</th>
				<th>Telefono</th>
				<th>Email</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($alumnos as $alumno)
			
			<tr>
				<td>{{$alumno->id}}</td>
				<td>{{$alumno->cuil}}</td>
				<td>{{$alumno->apellido}}</td>
				<td>{{$alumno->nombre}}</td>
				<td>{{$alumno->fecha_nacimiento}}</td>
				<td>{{$alumno->lugar_nacimiento}}</td>
				<td>{{$alumno->nacionalidad}}</td>
				<td>{{$alumno->direccion}}</td>
				<td>{{$alumno->telefono}}</td>
				<td>{{$alumno->email}}</td>
				<td>
					<div class="btn-group btn-group-justified">
						<a href="{{route('alumnos.show',$alumno->id)}}" class="btn green darken-4">Ver</a>
					</div>
				</td>
			</tr>
			
			@endforeach
		</tbody>
	</table>

	</div>

	{{-- Estructura Modal --}}
	<div id="modalBuscarAlumno" class="modal">
		<div class="modal-content">
			
			<div class="row">
				<div class="input-field col s12">
		    		{{ Form::label('cuil','Ingrese Cuil, Apellido o Nombre para la búsqueda del Alumno',(['class'=>'active','for'=>'cuil'])) }}
		    		{{ Form::text('bcuil','',(['class'=>'validate'])) }}
				</div>
			</div>

			<button class="btn lime" id="buscar">Buscar</button>

			<div class="card-panel hoverable green lighten-4">

				<table id="tablaModal" class="highlight">
					<thead>
						<tr>
							<th>ID</th>
							<th>Cuil</th>
							<th>Apellido</th>
							<th>Nombre</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						</tr>
					</tbody>
				</table>

			</div>
			
		</div>
		<div class="modal-footer">
			<a href="{{-- {{route('cursos.agregarMateria','$curso->id')}} --}}" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
		</div>
	</div>

	<script>
		const axios = require('axios');
		
		axios.get('http://127.0.0.1:8000/alumnos')
		  .then(function (response) {
		    $.each(response, function(i, alumno) {
					 $('#tablaModal').append('<tr><td>'+alumno.id+'</td><td>'+alumno.cuil+'</td><td>'+alumno.apellido+'</td><td>'+alumno.nombre+'</td></tr>');
					});
		    console.log(response);
		  })
		  .catch(function (error) {
		    // handle error
		    console.log(error);
		  })
		  .then(function () {
		    // always executed
		  });

		  function buscarAlumno(cuil) {
			  try {
			    axios.get('http://127.0.0.1:8000/alumnos?id.'+'$cuil');
			    console.log(response);
			  } catch (error) {
			    console.error(error);
			  }
			}
		
		$('#buscar').click(function(event) {
				var cuil = $('#bcuil').val();

				buscarAlumno(cuil);
			});

	</script>

@endsection