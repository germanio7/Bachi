@extends('home')

@section('contenido')
	
	
	<div class="row" id="crud_docentes">
		<div class=" margin">
			
			<div class="fixed-action-btn" id="boton">
		  		<a class="btn-floating btn-large green waves-effect waves-light modal-trigger" href="#create"><i class="fas fa-plus fa-lg"></i></a>
			</div>

				<blockquote><h1>Docentes</h1></blockquote>

				<table class="striped">
					<thead>
						<tr>
							<th>Cuil</th>
							<th>Apellido</th>
							<th>Nombre</th>
							<th>Matricula</th>
							<th>Titulo</th>
							<th>Direccion</th>
							<th>Telefono</th>
							<th>Email</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="docente in docentes">
							<td>@{{docente.cuil}}</td>
							<td>@{{docente.apellido}}</td>
							<td>@{{docente.nombre}}</td>
							<td>@{{docente.matricula}}</td>
							<td>@{{docente.titulo}}</td>
							<td>@{{docente.direccion}}</td>
							<td>@{{docente.telefono}}</td>
							<td>@{{docente.email}}</td>
							<td>
								<div class="btn-group" role="group">
						      <a class="btn blue"><i class="fas fa-print fa-lg"></i></a>
						      <a class="btn green"><i class="fas fa-pen fa-lg"></i></a>
									<a class="btn red darken-4" v-on:click.prevent="deleteDocente(docente)"><i class="fas fa-trash fa-lg"></i></a>
						    </div>
							</td>
						</tr>
					</tbody>
				</table>

			<div>
				@include('docentes.create')
			</div>

		</div>
	</div>


@endsection