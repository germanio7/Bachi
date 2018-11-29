<template>
	<div>

		<div class="fixed-action-btn" id="boton">
	  	<a class="btn-floating btn-large blue" v-on:click="change(1);"><i class="fas fa-arrow-left fa-lg"></i></a>
		</div>
	
		<div class="col s10 offset-s1">
			<div class="card">
				<form method='POST' v-on:submit.prevent="createDocente()">
					<div class="card-content">
						<blockquote><h4>Nuevo Docente</h4></blockquote>
					</div>
					<div class="card-action">

						<div class="row">
							<div class="input-field col m6 s12">
								<input id="cuil" type="text" class="validate" v-model="newCuil">
          			<label for="cuil">Cuil</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col m6 s12">
								<input id="apellido" type="text" class="validate" v-model="newApellido">
          			<label for="apellido">Apellido</label>
							</div>
							<div class="input-field col m6 s12">
								<input id="nombre" type="text" class="validate" v-model="newNombre">
          			<label for="nombre">Nombre</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col m6 s12">
								<input id="registro" type="text" class="validate" v-model="newRegistro">
          			<label for="registro">Nº Registro</label>
							</div>
							<div class="input-field col m6 s12">
								<input id="titulo" type="text" class="validate" v-model="newTitulo">
          			<label for="titulo">Titulo</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col m6 s12">
								<input id="direccion" type="text" class="validate" v-model="newDireccion">
          			<label for="direccion">Dirección</label>
							</div>
							<div class="input-field col m6 s12">
								<input id="telefono" type="text" class="validate" v-model="newTelefono">
          			<label for="telefono">Telefono</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col m6 s12">
								<input id="mail" type="text" class="validate" v-model="newMail">
          			<label for="mail">Email</label>
							</div>
						</div>

					</div>
					<div class="card-action">
			      <button type="submit" class="btn btn-flat waves-effect waves-green green modal-close white-text">Guardar</button>
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

		data() {
			return {
				newCuil: '',
				newApellido: '',
				newNombre: '',
				newRegistro: '',
				newTitulo: '',
				newDireccion: '',
				newTelefono: '',
				newMail: ''
			}
		},

		methods: {

			change: function(point) {
				this.newNombre = '';
				EventBus.$emit('change', point);
			},

			createDocente: function() {
				var url = 'docentes';
				axios.post(url, {
					cuil: this.newCuil,
					apellido: this.newApellido,
					nombre: this.newNombre,
					matricula: this.newRegistro,
					titulo: this.newTitulo,
					direccion: this.newDireccion,
					telefono: this.newTelefono,
					email: this.newMail
				}).then(response => {
					this.newCuil = '';
					this.newApellido = '';
					this.newNombre = '';
					this.newRegistro = '';
					this.newTitulo = '';
					this.newDireccion = '';
					this.newTelefono = '';
					this.newMail = '';
					this.change(1);
					var toastHTML = 'Docente Registrado';
					M.toast({html: toastHTML, classes: 'green'});
				}).catch(error => {
					this.change(1);
					console.log(error.response.data)
				});
			}

		}

	}

</script>