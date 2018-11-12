@extends('home')

@section('contenido')

	<div class="row" id="crud_alumno">
		<div class="margin">

			<div class="fixed-action-btn" id="boton">
		  		<a href="#create" class="btn-floating btn-large green waves-effect waves-light" onclick="change(2);"><i class="fas fa-plus fa-lg"></i></a>
			</div>

			<div id="index">
				<blockquote><h1>Alumnos</h1></blockquote>

				<table class="striped">
					<thead>
						<tr>
							<th>Cuil</th>
							<th>Apellido</th>
							<th>Nombre</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="alumno in alumnos">
							<td>@{{alumno.cuil}}</td>
							<td>@{{alumno.apellido}}</td>
							<td>@{{alumno.nombre}}</td>
							<td>
								<div class="btn-group" role="group">
						      <a class="btn blue"><i class="fas fa-print fa-lg"></i></a>
						      <a class="btn green"><i class="fas fa-pen fa-lg"></i></a>
									<a class="btn red darken-4" v-on:click.prevent="deleteAlumno(alumno)"><i class="fas fa-trash fa-lg"></i></a>
						    </div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div id="create" style="display: none;">
				@include('alumnos.create')
			</div>
			
		</div>
	</div>

<<<<<<< HEAD
	<blockquote><h1>Alumnos</h1></blockquote>

	<table class="striped">
		<thead>
			<tr>
				<th>Cuil</th>
				<th>Apellido</th>
				<th>Nombre</th>
				<th>Asistencia</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($alumnos as $alumno)	
			<tr>
				<td>{{$alumno->cuil}}</td>
				<td>{{$alumno->apellido}}</td>
				<td>{{$alumno->nombre}}</td>
				<td></td>
				<td>
					<div class="btn-group" role="group">
			        <a class="btn blue" href="{{route('alumnos.show',$alumno->id)}}"><i class="fas fa-print fa-lg"></i></a>
			        <a class="btn green" href="{{route('alumnos.edit',$alumno->id)}}"><i class="fas fa-pen fa-lg"></i></a>
			      
			      {!!Form::open(['route'=>['alumnos.destroy',$alumno->id],'method'=>'DELETE'])!!}
						<button class="btn red darken-4"><i class="fas fa-trash fa-lg"></i></button>
				  {!!Form::close()!!}
			    </div>
				</td>
			@endforeach
		</tbody>
	</table>
=======
	<script>
		function change(point){
			var boton = document.getElementById('boton');
			var index = document.getElementById('index');
			var crear = document.getElementById('create');
			if(point == 1){
				crear.style.display = 'none';
				index.style.display = 'block';
				boton.innerHTML = '<a class="btn-floating btn-large green waves-effect waves-light" onclick="change(2);"><i class="fas fa-plus fa-lg"></i></a>';
			}else if(point == 2) {	
				crear.style.display = 'block';
				index.style.display = 'none';			
				boton.innerHTML = '<a class="btn-floating btn-large blue waves-effect waves-light" onclick="change(1);"><i class="fas fa-arrow-left fa-lg"></i></a>';
			}
		}		
	</script>
>>>>>>> 36b32d22cd8cdcff7f25b23d584759de12abf793

@endsection