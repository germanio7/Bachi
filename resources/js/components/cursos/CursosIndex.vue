<template>
	<div>

		<div id="create" style="display: none;">
			<br>
			<cursos-create></cursos-create>
		</div>

		<div id="edit" style="display: none;">
			<br>
			<cursos-edit :edit_curso="edit_curso"></cursos-edit>
		</div>

		<div id="index" style="display: block;">

			<div class="fixed-action-btn" id="boton">
		  	<a class="btn-floating btn-large green" v-on:click="change(2);"><i class="fas fa-plus fa-lg"></i></a>
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
						<td>{{curso.curso}}</td>
						<td>{{curso.division}}</td>
						<td>{{curso.orientacion}}</td>
						<td>{{curso.turno}}</td>
						<td>
							<div class="btn-group" role="group">
					      <a class="btn blue"><i class="fas fa-print fa-lg"></i></a>
					      <a class="btn green" v-on:click="editCurso(curso);"><i class="fas fa-pen fa-lg"></i></a>
								<a href="#eliminar" class="btn red darken-4 modal-trigger" v-on:click.prevent="confirmDelete(curso)"><i class="fas fa-trash fa-lg"></i></a>
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
	      <p>¿Realmente desea eliminar los datos del Curso?</p>
	    </div>
	    <div class="modal-footer">
	    	<a href="#!" class="modal-close waves-effect waves-green btn green">¡NO! Cancelar</a>
	      <a href="#!" class="modal-close waves-effect waves-green btn red" v-on:click.prevent="deleteCurso()">¡SI! Eliminar</a>
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
				cursos: [],
				edit_curso: {},
				delete_curso: ''
			}
		},

		methods: {

			getCursos: function() {
				axios.get('cursos').then(response => {
					this.cursos = response.data.data;
				});
			},

			infiniteHandler: function($state) {
				let limit = this.cursos.length / 6 + 1;
				axios.get('cursos', { params: { page: limit } }).then(response => {
					this.loadMore($state, response);
				});
			},

			loadMore: function($state, response) {
				if(response.data.data.length) {
					this.cursos = this.cursos.concat( response.data.data);
					$state.loaded();

					if(response.data.total == this.cursos.length) {
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
					this.getCursos();
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

			editCurso: function(curso) {
				this.edit_curso = curso;
				this.change(3);
			},

			confirmDelete: function(curso) {
				this.delete_curso = curso.id;
			},

			deleteCurso: function() {
				axios.delete('cursos/' + this.delete_curso).then(response => {
					this.getCursos();
					M.toast({html: 'Curso Eliminado', classes: 'red'})
				});
			}

		}

	}

</script>