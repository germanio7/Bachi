@extends('home')

@section('contenido')

	<div class="row" id="crud_materias">
		<div class="margin">

			<div class="fixed-action-btn" id="boton">
		  		<a class="btn-floating btn-large green modal-trigger" href="#nuevo" v-on:click="getDocentes()"><i class="fas fa-plus fa-lg"></i></a>
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
{{-- 						      <a class="btn blue"><i class="fas fa-print fa-lg"></i></a> --}}
						      <a class="btn green modal-trigger" v-on:click.prevent="editMateria(materia)" href="#editar"><i class="fas fa-pen fa-lg"></i></a>
									<a class="btn red darken-4" v-on:click.prevent="deleteMateria(materia)"><i class="fas fa-trash fa-lg"></i></a>
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
					@include('materias.create')
					@include('materias.edit')
				</div>
			
		</div>
	</div>

	<script src="{{asset('/js/app.js')}}"></script>
	<script>
			new Vue({

				el: '#crud_materias',

				created: function() {
					this.getMaterias();
					this.getDocentes();
				},

				data: {
					materias: [],
					offset: 2,
					pagination: {
						'total': 0, 
            'current_page': 0, 
            'per_page': 0,
            'last_page': 0, 
            'from': 0, 
            'to': 0 
					},
					docentes: [],
					fillMaterias: {
						id: '',
						nombre: '',
						docentes: []
					},
					newNombre: '',
					newDocenteId: 0
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
					getMaterias: function(page) {
						var urlMaterias = 'materias?page='+page;
						axios.get(urlMaterias).then(response => {
							this.materias = response.data.materias.data,
							this.pagination = response.data.pagination
						});
					},
					getDocentes: function() {
						var busqueda = document.getElementById('buscar').value;
						if (busqueda == null) {
							axios.get('docentes').then(response => {
							this.docentes = response.data;
							});
						} else {
							axios.post('buscarDocente', {
								busqueda: busqueda,
							}).then(response => {
								this.docentes = response.data;
							}).catch(error => {
								console.log(error.response.data)
							});
						};	
					},
					deleteMateria: function(materia) {
						var id = materia.id;
						axios.delete('materias/' + id).then(response => {
							this.getMaterias();
							M.toast({html: 'Materia Eliminada', classes: 'red'})
						});
					},
					createMateria: function(){
						var url = 'materias';
						axios.post(url, {
							nombre: this.newNombre,
							docente_id: this.newDocenteId
						}).then(response => {
							this.getMaterias();
							this.newNombre = '';
							this.newDocenteId = 0;
							M.toast({html: 'Materia Registrada', classes: 'green'});
						}).catch(error => {
							console.log(error.response.data)
						});
					},
					editMateria: function(materia){
						this.fillMaterias.id = materia.id;
						this.fillMaterias.nombre = materia.nombre;
						return this.fillMaterias;
					},
					updateMateria: function(id) {
						axios.put('materias/'+id, this.fillMaterias).then(response => {
							this.getMaterias();
							M.toast({html: 'Datos Actualizados', classes: 'green'})
							this.fillMaterias={
								nombre: ''
							};
						}).catch(error => {
							this.getMaterias();
							M.toast({html: 'X Error', classes: 'red'})
							console.log(error.response.data)
						});
					},
					changePage: function(page){
						this.pagination.current_page = page;
						this.getMaterias(page);
					}
				}	

			});
	</script>

@endsection