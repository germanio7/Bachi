<template>
		<div>

		<div id="create" style="display: none;">
			<br>
			<materias-create></materias-create>
		</div>

		<div id="edit" style="display: none;">
			<br>
			<materias-edit :edit_materia="edit_materia"></materias-edit>
		</div>

		<div id="index" style="display: block;">

			<div class="fixed-action-btn" id="boton">
		  	<a class="btn-floating btn-large green" v-on:click="change(2);"><i class="fas fa-plus fa-lg"></i></a>
			</div>

			<blockquote><h1>Materias</h1></blockquote>

			<table class="striped">
				<thead>
					<tr>
						<th>Nombre</th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="materia in materias">
						<td>{{materia.nombre}}</td>
						<td>
							<div class="btn-group" role="group">
					      <a class="btn blue"><i class="fas fa-print fa-lg"></i></a>
					      <a class="btn green" v-on:click="editMateria(materia);"><i class="fas fa-pen fa-lg"></i></a>
								<a href="#eliminar" class="btn red darken-4 modal-trigger" v-on:click.prevent="confirmDelete(materia)"><i class="fas fa-trash fa-lg"></i></a>
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
	      <p>¿Realmente desea eliminar los datos de la Materia?</p>
	    </div>
	    <div class="modal-footer">
	    	<a href="#!" class="modal-close waves-effect waves-green btn green">¡NO! Cancelar</a>
	      <a href="#!" class="modal-close waves-effect waves-green btn red" v-on:click.prevent="deleteMateria()">¡SI! Eliminar</a>
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
			this.getMaterias();
		},

		data() {
			return {
				materias: [],
				edit_materia: {},
				delete_materia: ''
			}
		},

		methods: {

			getMaterias: function() {
				axios.get('materias').then(response => {
					this.materias = response.data.data;
				});
			},

			infiniteHandler: function($state) {
				let limit = this.materias.length / 6 + 1;
				axios.get('materias', { params: { page: limit } }).then(response => {
					this.loadMore($state, response);
				});
			},

			loadMore: function($state, response) {
				if(response.data.data.length) {
					this.materias = this.materias.concat( response.data.data);
					$state.loaded();

					if(response.data.total == this.materias.length) {
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
					this.getMaterias();
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

			editMateria: function(materia) {
				this.edit_materia = materia;
				this.change(3);
			},

			confirmDelete: function(materia) {
				this.delete_materia = materia.id;
			},

			deleteMateria: function() {
				axios.delete('materias/' + this.delete_materia).then(response => {
					this.getMaterias();
					M.toast({html: 'Materia Eliminada', classes: 'red'})
				});
			}

		}

	}

</script>