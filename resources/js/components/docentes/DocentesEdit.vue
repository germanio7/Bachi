<template>
		<div>

		<div class="fixed-action-btn" id="boton">
	  	<a class="btn-floating btn-large blue" v-on:click="change(1);"><i class="fas fa-arrow-left fa-lg"></i></a>
		</div>
	
		<div class="col s10 offset-s1">
			<div class="card">
				<form method='POST' v-on:submit.prevent="updateDocente()">
					<div class="card-content">
						<blockquote><h4>Nuevo Docente</h4></blockquote>
					</div>
					<div class="card-action">

						<div class="row">
							<div class="input-field col m6 s12">
								<p class="green-text">Cuil</p>
								<input id="cuil" type="text" class="validate" v-model="edit_docente.cuil">
							</div>
						</div>

						<div class="row">
							<div class="input-field col m6 s12">
								<p class="green-text">Apellido</p>
								<input id="apellido" type="text" class="validate" v-model="edit_docente.apellido">
							</div>
							<div class="input-field col m6 s12">
								<p class="green-text">Nombre</p>
								<input id="nombre" type="text" class="validate" v-model="edit_docente.nombre">
							</div>
						</div>

						<div class="row">
							<div class="input-field col m6 s12">
								<p class="green-text">Nº Registro</p>
								<input id="registro" type="text" class="validate" v-model="edit_docente.matricula">
							</div>
							<div class="input-field col m6 s12">
								<p class="green-text">Titulo</p>
								<input id="titulo" type="text" class="validate" v-model="edit_docente.titulo">
							</div>
						</div>

						<div class="row">
							<div class="input-field col m6 s12">
								<p class="green-text">Dirección</p>
								<input id="direccion" type="text" class="validate" v-model="edit_docente.direccion">
							</div>
							<div class="input-field col m6 s12">
								<p class="green-text">Telefono</p>
								<input id="telefono" type="text" class="validate" v-model="edit_docente.telefono">
							</div>
						</div>

						<div class="row">
							<div class="input-field col m6 s12">
								<p class="green-text">Email</p>
								<input id="mail" type="text" class="validate" v-model="edit_docente.email">
							</div>
						</div>

					</div>
					<div class="card-action">
			      <button type="submit" class="btn btn-flat waves-effect waves-green green modal-close white-text">Actualizar Datos</button>
			    </div>
				</form>
			</div>
		</div>

	</div>
</template>

<script>

	import axios from 'axios';
	import EventBus from '../../event-bus';

	export default {

		props: ['edit_docente'],
	
		methods: {

			change: function(point) {
				this.newNombre = '';
				EventBus.$emit('change', point);
			},

			updateDocente: function() {
				axios.put('docentes/'+this.edit_docente.id, this.edit_docente).then(response => {
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