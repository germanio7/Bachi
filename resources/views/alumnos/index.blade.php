@extends('home')

@section('contenido')

	<div class="row" id="crud_alumno">
		<div class="margin" id="inicio">

			<div class="fixed-action-btn" id="boton_crear">
		  		<a class="btn-floating btn-large green waves-effect waves-light" v-on:click="change(2)"><i class="fas fa-plus fa-lg"></i></a>
			</div>
			<div class="fixed-action-btn" id="boton_editar" style="display: none;">
		  		<a class="btn-floating btn-large blue waves-effect waves-light" v-on:click="change(1)"><i class="fas fa-arrow-left fa-lg"></i></a>
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
							<td>@{{alumno.id}}</td>
							<td>@{{alumno.apellido}}</td>
							<td>@{{alumno.nombre}}</td>
							<td>
								<div class="btn-group" role="group">
						      <a class="btn blue"><i class="fas fa-print fa-lg"></i></a>
						      <a class="btn green" v-on:click.prevent="editAlumno(alumno)"><i class="fas fa-pen fa-lg"></i></a>
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
			<div id="edit" style="display: none;">
				@include('alumnos.edit')
			</div>
			
		</div>
	</div>

@endsection