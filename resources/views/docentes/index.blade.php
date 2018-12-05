@extends('inicio')

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

				<ul class="pagination">
			    <li v-if="pagination.current_page > 1"><a href="" @click.prevent="changePage(pagination.current_page - 1)"><i class="fas fa-arrow-left fa-lg"></i></a></li>
			    <li v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active light-green darken-2' : '']">
			    	<a href="" @click.prevent="changePage(page)">@{{ page }}</a>
			    </li>
			    <li v-if="pagination.current_page < pagination.last_page"><a href="" @click.prevent="changePage(pagination.current_page + 1)"><i class="fas fa-arrow-right fa-lg"></i></a></li>
			  </ul>

			<div>
				@include('docentes.create')
			</div>

		</div>
	</div>

	<script src="{{asset('/js/home.js')}}"></script>
	<script>
			new Vue({

				el: '#crud_docentes',

				created: function() {
					this.getDocentes();
				},

				data: {		
					docentes: [],
					offset: 2,
					pagination: {
						'total': 0, 
            'current_page': 0, 
            'per_page': 0,
            'last_page': 0, 
            'from': 0, 
            'to': 0 
					},
					newCuil: '',
					newApellido: '',
					newNombre: '',
					newMatricula: '',
					newTitulo: '',
					newDireccion: '',
					newTelefono: '',
					newEmail: ''
				},

				computed: {
					isActived: function() {
						return this.pagination.current_page;
					},
					pagesNumber: function() {
						if(!this.pagination.to){
								return [];
						}

						var from = this.pagination.current_page - this.offset;
						if(from < 1){
							from = 1;
						}

						var to = from + (this.offset * 2);
						if(to >= this.pagination.last_page){
							to = this.pagination.last_page;
						}

						var pagesArray = [];
						while(from <= to){
							pagesArray.push(from);
							from++;
						}
						return pagesArray;
					}
				},

				methods: {

					getDocentes: function(page) {
						var urlDocentes = 'docentes?page='+page;
						axios.get(urlDocentes).then(response => {
							this.docentes = response.data.docentes.data,
							this.pagination = response.data.pagination
						});
					},
					deleteDocente: function(docente) {
						var id = docente.id;
						axios.delete('docentes/' + id).then(response => {
							this.getMaterias();
							M.toast({html: 'Docente Eliminado'})
						});
					},
					createDocente: function(){
						var url = 'docentes';
						axios.post(url, {
							cuil: this.newCuil,
							apellido: this.newApellido,
							nombre: this.newNombre,
							matricula: this.newMatricula,
							titulo: this.newTitulo,
							direccion: this.newDireccion,
							telefono: this.newTelefono,
							email: this.newEmail
						}).then(response => {
							this.getDocentes();
							this.newCuil = '';
							this.newApellido = '';
							this.newNombre = '';
							this.newMatricula = '';
							this.newTitulo = '';
							this.newDireccion = '';
							this.newTelefono = '';
							this.newEmail = '';
						}).catch(error => {
							console.log(error.response.data)
						});
					},
					changePage: function(page){
						this.pagination.current_page = page;
						this.getDocentes(page);
					}
				}

			});
	</script>

@endsection