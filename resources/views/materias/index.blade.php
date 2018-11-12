@extends('home')

@section('contenido')

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
				</div>
			
		</div>
	</div>

@endsection