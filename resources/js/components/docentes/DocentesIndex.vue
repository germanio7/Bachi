<template>
	<div>

		<div id="create" style="display: none;">
			<br>
			<docentes-create></docentes-create>
		</div>

		<div id="edit" style="display: none;">
			<br>
			<docentes-edit :edit_docente="edit_docente"></docentes-edit>
		</div>

		<div id="index" style="display: block;">

			<div class="fixed-action-btn" id="boton">
		  	<a class="btn-floating btn-large green" v-on:click="change(2);"><i class="fas fa-plus fa-lg"></i></a>
			</div>

			<blockquote><h1>Docentes</h1></blockquote>

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
					<tr v-for="docente in docentes">
						<td>{{docente.cuil}}</td>
						<td>{{docente.apellido}}</td>
						<td>{{docente.nombre}}</td>
						<td>
							<div class="btn-group" role="group">
					      <a class="btn blue"><i class="fas fa-print fa-lg"></i></a>
					      <a class="btn green" v-on:click="editDocente(docente);"><i class="fas fa-pen fa-lg"></i></a>
								<a href="#eliminar" class="btn red darken-4 modal-trigger" v-on:click.prevent="confirmDelete(docente)"><i class="fas fa-trash fa-lg"></i></a>
					    </div>
						</td>
					</tr>
				</tbody>
			</table>

			<infinite-loading @infinite="infiniteHandler">
				<span slot="no-more">
					Todos los datos han sido cargados
				</span>
			</infinite-loading>
		</div>

		<div id="eliminar" class="modal">
	    <div class="modal-content">
	      <h4>¿Estas Seguro?</h4>
	      <p>¿Realmente desea eliminar los datos del Docente?</p>
	    </div>
	    <div class="modal-footer">
	    	<a href="#!" class="modal-close waves-effect waves-green btn green">¡NO! Cancelar</a>
	      <a href="#!" class="modal-close waves-effect waves-green btn red" v-on:click.prevent="deleteDocente()">¡SI! Eliminar</a>
	    </div>
	  </div>

	</div>
</template>

<script>
	
	import axios from 'axios';
	import InfiniteLoading from 'vue-infinite-loading';
	import EventBus from '../../event-bus';

	export default {

		created() {
			EventBus.$on('change', data => {
        this.change(data);
       });
		},

		data() {
			return {
				docentes: [],
				edit_docente: {},
				delete_docente: ''
			}
		},

		methods: {

			getDocentes: function() {
				axios.get('docentes').then(response => {
					this.docentes = response.data.data;
				});
			},

			infiniteHandler: function($state) {
				let limit = this.docentes.length / 10 + 1;
				axios.get('docentes', { params: { page: limit } }).then(response => {
					this.loadMore($state, response);
				});
			},

			loadMore: function($state, response) {
				if(response.data.data.length) {
					this.docentes = this.docentes.concat( response.data.data);
					$state.loaded();

					if(response.data.total == this.docentes.length) {
						$state.complete();
					}
					
				} else {
					$state.complete();
				}
			},

			change: function(point) {
				var index = document.getElementById('index');
				var create = document.getElementById('create');
				var edit = document.getElementById('edit');
				if (point == 1) {
					index.style.display = 'block';
					create.style.display = 'none';
					edit.style.display = 'none';
					this.getDocentes();
				} else if (point == 2) {
					index.style.display = 'none';
					create.style.display = 'block';
					edit.style.display = 'none';
				} else if (point == 3) {
					index.style.display = 'none';
					create.style.display = 'none';
					edit.style.display = 'block';
				};
			},

			editDocente: function(docente) {
				this.edit_docente = docente;
				this.change(3);
			},

			confirmDelete: function(docente) {
				this.delete_docente = docente.id;
			},

			deleteDocente: function() {
				axios.delete('docentes/' + this.delete_docente).then(response => {
					this.getDocentes();
					M.toast({html: 'Docente Eliminado', classes: 'red'})
				});
			}

		}

	}

</script>