<template>
	<div>

		<div class="fixed-action-btn" id="boton">
	  	<a class="btn-floating btn-large blue" v-on:click="change(1);"><i class="fas fa-arrow-left fa-lg"></i></a>
		</div>

		<div class="col s10 offset-s1">
			<form method='POST' v-on:submit.prevent="createMateria">
		    <div class="card">
		    	<div class="card-content">
				    <blockquote><h4>Nueva Materia</h4></blockquote>
		      	<div class="row">
							<div class="input-field col s12">
			          <input id="nombre" type="text" class="validate" name="nombre" v-model="newNombre">
			          <label for="nombre">Nombre</label>
			        </div>
			      </div>
					</div>
					<div class="card-action">
			      <button type="submit" class="btn btn-flat waves-effect waves-green green modal-close white-text">Guardar</button>
			    </div>
			  </div>
			</form>
	  </div>
	    		
  </div>
</template>

<script>

	import axios from 'axios';
	import InfiniteLoading from 'vue-infinite-loading';
	import EventBus from '../../event-bus';

	export default {

		data() {
			return {
				newNombre: ''
			}
		},

		methods: {

			change: function(point){
				this.newNombre = '';
				EventBus.$emit('change', point);
			},

			createMateria: function(){
				var url = 'materias';
				axios.post(url, {
					nombre: this.newNombre
				}).then(response => {
					this.newNombre = '';
					this.change(1);
					var toastHTML = 'Materia Registrado';
					M.toast({html: toastHTML, classes: 'green'});
				}).catch(error => {
					this.change(1);
					console.log(error.response.data)
				});
			}

		}

	}
	
</script>