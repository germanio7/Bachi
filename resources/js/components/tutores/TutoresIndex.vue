<template>
	<div>

		<div id="edit" style="display: none;">
			<br>
			<tutores-edit :edit_tutor="edit_tutor"></tutores-edit>
		</div>

		<div id="index" style="display: block;">

			<blockquote><h1>Tutores</h1></blockquote>

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
					<tr v-for="tutor in tutores">
						<td>{{tutor.cuil}}</td>
						<td>{{tutor.apellido}}</td>
						<td>{{tutor.nombre}}</td>
						<td>
							<div class="btn-group" role="group">
					      <a class="btn blue"><i class="fas fa-print fa-lg"></i></a>
					      <a class="btn green" v-on:click="editTutor(tutor);"><i class="fas fa-pen fa-lg"></i></a>
								<a href="#eliminar" class="btn red darken-4 modal-trigger" v-on:click.prevent="confirmDelete(tutor)"><i class="fas fa-trash fa-lg"></i></a>
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
	      <p>¿Realmente desea eliminar los datos del Tutor?</p>
	    </div>
	    <div class="modal-footer">
	    	<a href="#!" class="modal-close waves-effect waves-green btn green">¡NO! Cancelar</a>
	      <a href="#!" class="modal-close waves-effect waves-green btn red" v-on:click.prevent="deleteTutor()">¡SI! Eliminar</a>
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
				tutores: [],
				edit_tutor: {},
				delete_tutor: ''
			}
		},

		methods: {

			getTutores: function() {
				axios.get('padres').then(response => {
					this.tutores = response.data.data;
				});
			},

			infiniteHandler: function($state) {
				let limit = this.tutores.length / 10 + 1;
				axios.get('padres', { params: { page: limit } }).then(response => {
					this.loadMore($state, response);
				});
			},

			loadMore: function($state, response) {
				if(response.data.data.length) {
					this.tutores = this.tutores.concat( response.data.data);
					$state.loaded();

					if(response.data.total == this.tutores.length) {
						$state.complete();
					}
					
				} else {
					$state.complete();
				}
			},

			change: function(point) {
				var index = document.getElementById('index');
				var edit = document.getElementById('edit');
				if (point == 1) {
					index.style.display = 'block';
					edit.style.display = 'none';
					this.getTutores();
				} else if (point == 3) {
					index.style.display = 'none';
					edit.style.display = 'block';
				};
			},

			editTutor: function(tutor) {
				this.edit_tutor = tutor;
				var	fecha_nacimiento = tutor.fecha_nacimiento;
				EventBus.$emit('nacimiento', fecha_nacimiento)
				this.change(3);
			},

			confirmDelete: function(tutor) {
				this.delete_tutor = tutor.id;
			},

			deleteTutor: function() {
				axios.delete('padres/' + this.delete_tutor).then(response => {
					this.getTutores();
					M.toast({html: 'Tutor Eliminado', classes: 'red'})
				});
			}

		}

	}

</script>