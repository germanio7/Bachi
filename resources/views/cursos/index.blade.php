@extends('home')

@section('contenido')

	<div class="row" id="crud_cursos">
		<div class=" margin">
			
			<div class="fixed-action-btn" id="boton">
		  		<a class="btn-floating btn-large green waves-effect waves-light modal-trigger" href="#create"><i class="fas fa-plus fa-lg"></i></a>
			</div>

				<blockquote><h1>Cursos</h1></blockquote>

				<table class="striped">
					<thead>
						<tr>
							<th>Curso</th>
							<th>Division</th>
							<th>Orientación</th>
							<th>Turno</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="curso in cursos">
							<td>@{{curso.curso}}</td>
							<td>@{{curso.division}}</td>
							<td>@{{curso.orientacion}}</td>
							<td>@{{curso.turno}}</td>
							<td>
								<div class="btn-group" role="group">
						      		<a class="btn blue" v-on:click.prevent=""><i class="fas fa-print fa-lg"></i></a>
						      		<a class="btn green modal-trigger" href="#edit" v-on:click.prevent="editCurso(curso)"><i class="fas fa-pen fa-lg"></i></a>
									<a class="btn red darken-4 modal-trigger" v-on:click.prevent="deleteCurso(curso)"><i class="fas fa-trash fa-lg"></i></a>
						    	</div>
							</td>
						</tr>
					</tbody>
				</table>

			<div>
				@include('cursos.create')
				@include('cursos.edit')
			</div>

		</div>
	</div>

@endsection