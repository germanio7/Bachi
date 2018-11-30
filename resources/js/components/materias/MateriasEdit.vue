<template>
	<div>
		<div class="fixed-action-btn" id="boton">
	  	<a class="btn-floating btn-large blue" v-on:click="change(1);"><i class="fas fa-arrow-left fa-lg"></i></a>
		</div>

		<div class="col s10 offset-s1">
			<form method='POST' v-on:submit.prevent="updateMateria()">
		    <div class="card">
		    	<div class="card-content">
				    <blockquote><h4>Editar Materia</h4></blockquote>
		      	<div class="row">
							<div class="input-field col s12">
								<p class="green-text">Nombre</p>
			          <input id="nombre" type="text" class="validate" name="nombre" v-model="edit_materia.nombre">
			        </div>
			      </div>
					</div>
					<div class="card-action">
			      <button type="submit" class="btn btn-flat waves-effect waves-green green modal-close white-text">Actualizar Datos</button>
			    </div>
			  </div>
			</form>
	  </div>

	</div>
</template>

<script>

	import axios from 'axios';
	import EventBus from '../../event-bus';

	export default {

		props: ['edit_materia'],
	
		methods: {

			change: function(point) {
				EventBus.$emit('change', point);
			},

			updateMateria: function() {
				axios.put('materias/'+this.edit_materia.id, this.edit_materia).then(response => {
					M.toast({html: 'Datos Actualizados', classes: 'green'});
          this.change(1);
				}).catch(error => {
					M.toast({html: 'X Error', classes: 'red'})
					console.log(error.response.data);
          this.change(1);
				});
			}

		}

	}
	
</script>