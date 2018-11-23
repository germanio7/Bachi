<template>
	<div class="row">				
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
						      <a class="btn green"><i class="fas fa-pen fa-lg"></i></a>
									<a class="btn red darken-4" v-on:click.prevent="deleteAlumno(alumno)"><i class="fas fa-trash fa-lg"></i></a>
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
</template>

<script>
	
	import axios from 'axios';
	import InfiniteLoading from 'vue-infinite-loading';

	export default {
		
		created() {
			this.getAlumnos()
		},

		data() {
			return {
				alumnos: []
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

			deleteAlumno: function(alumno) {
				var id = alumno.id;
				axios.delete('alumnos/' + id).then(response => {
					this.getAlumnos();
					M.toast({html: 'Alumno Eliminado', classes: 'red'})
				});
			},

		}

	}

</script>