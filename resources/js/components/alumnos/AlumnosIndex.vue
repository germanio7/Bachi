<template>
	<div class="row">
		<div id="create" style="display: none;">
			<alumnos-create></alumnos-create>	
		</div>
		<div id="edit" style="display: none;">
			<alumnos-edit :edit_alumno="edit_alumno"></alumnos-edit>	
		</div>
		<div id="index">

			<div id="boton">
				<div class="fixed-action-btn">
					<a v-on:click="change(2);" class="btn-floating btn-large waves-effect waves-light green"><i class="fas fa-plus fa-lg"></i></a>
				</div>
			</div>

				<table>
					<thead>
						<tr>
							<th>Cuil</th>
							<th>Apellido</th>
							<th>Nombre</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="alumno, index in alumnos">
							<td>{{index + 1}}{{alumno.cuil}}</td>
							<td>{{alumno.apellido}}</td>							
							<td>{{alumno.nombre}}</td>
							<td>
								<div class="btn-group" role="group">
						      <a class="btn blue"><i class="fas fa-print fa-lg"></i></a>
						      <a class="btn green" v-on:click.prevent="editAlumno(alumno)"><i class="fas fa-pen fa-lg"></i></a>
									<a href="#eliminar" class="btn red darken-4 modal-trigger" v-on:click.prevent="confirmDelete(alumno)"><i class="fas fa-trash fa-lg"></i></a>
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
	      <p>¿Realmente desea eliminar los datos del alumno?</p>
	    </div>
	    <div class="modal-footer">
	    	<a href="#!" class="modal-close waves-effect waves-green btn green">¡NO! Cancelar</a>
	      <a href="#!" class="modal-close waves-effect waves-green btn red" v-on:click.prevent="deleteAlumno()">¡SI! Eliminar</a>
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
			this.getAlumnos();
			EventBus.$on('change', data => {
        this.change(data);
        this.getAlumnos();
       });
		},

		data() {
			return {
				alumnos: [],
				edit_alumno: {},
				delete_alumno: ''
			}
		},

		methods: {

			getAlumnos: function() {
				axios.get('alumnos').then(response => {
					this.alumnos = response.data.data;
				});
			},

			infiniteHandler: function($state) {
				let limit = this.alumnos.length / 10 + 1;
				axios.get('alumnos', { params: { page: limit } }).then(response => {
					this.loadMore($state, response);
				});
			},

			loadMore: function($state, response) {
				if(response.data.data.length) {
					this.alumnos = this.alumnos.concat( response.data.data);
					$state.loaded();

					if(response.data.total == this.alumnos.length) {
						$state.complete();
					}
					
				} else {
					$state.complete();
				}
			},

			editAlumno: function(alumno) {
				this.edit_alumno = alumno;
				var	fecha_nacimiento = alumno.fecha_nacimiento;
				EventBus.$emit('nacimiento', fecha_nacimiento)
				this.change(3);
			},

			change: function(point) {
				var index = document.getElementById('index');
				var create = document.getElementById('create');
				var edit = document.getElementById('edit');
				if (point == 1) {
					index.style.display = 'block';
					create.style.display = 'none';
					edit.style.display = 'none';
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

			confirmDelete: function(alumno) {
				this.delete_alumno = alumno.id;
			},

			deleteAlumno: function() {
				axios.delete('alumnos/' + this.delete_alumno).then(response => {
					this.getAlumnos();
					M.toast({html: 'Alumno Eliminado', classes: 'red'})
				});
			},

		}

	}

</script>