<template>
	<div>
		<div class="fixed-action-btn" id="boton">
		  <a class="btn-floating btn-large blue" v-on:click="change(1);"><i class="fas fa-arrow-left fa-lg"></i></a>
		</div>
		<div class="col s10 offset-s1">
				<form method='POST' v-on:submit.prevent="createCursos">
		      <div class="card">
		        <div class="card-content">
		        	<blockquote><h4>Nuevo Curso</h4></blockquote>
	          	<div class="row">
								<div class="col m6 s12">
									<h6><b>Curso: </b></h6>
				          <div class="radio-group" required>
										<input type="radio" v-model="newCurso" value="1º" id="c1" />
										<label for="c1"><b>1º</b></label>

										<input type="radio" v-model="newCurso" value="2º" id="c2" />
										<label for="c2"><b>2º</b></label>

										<input type="radio" v-model="newCurso" value="3º" id="c3" />
										<label for="c3"><b>3º</b></label>

										<input type="radio" v-model="newCurso" value="4º" id="c4" />
										<label for="c4"><b>4º</b></label>

										<input type="radio" v-model="newCurso" value="5º" id="c5" />
										<label for="c5"><b>5º</b></label>
									</div>
				        </div>

				        <div class="col m6 s12">
									<h6><b>División: </b></h6>
				          <div class="radio-group" required>
										<input type="radio" v-model="newDivision" value="1ª" id="d1" />
										<label for="d1"><b>1ª</b></label>

										<input type="radio" v-model="newDivision" value="2ª" id="d2" />
										<label for="d2"><b>2ª</b></label>

										<input type="radio" v-model="newDivision" value="3ª" id="d3" />
										<label for="d3"><b>3ª</b></label>

										<input type="radio" v-model="newDivision" value="4ª" id="d4" />
										<label for="d4"><b>4ª</b></label>

										<input type="radio" v-model="newDivision" value="5ª" id="d5" />
										<label for="d5"><b>5ª</b></label>

										<input type="radio" v-model="newDivision" value="6ª" id="d6" />
										<label for="d6"><b>6ª</b></label>

										<input type="radio" v-model="newDivision" value="7ª" id="d7" />
										<label for="d7"><b>7ª</b></label>
									</div>
				        </div>
				      </div>
							<div class="row">
				        <div class="input-field col m4 s12">
				          <select id="orientacion" requierd v-model="newOrientacion" class="browser-default">
				            <option value="" disabled selected>Orientación</option>
					          <option value="Ciclo Basico">Ciclo Básisco</option>
					          <option value="Ciencias Sociales y Humanidades">Ciencias Sociales y Humanidades</option>
					          <option value="Ciencias Naturales">Ciencias Naturales</option>
					          <option value="Economía y Administración">Economía y Administración</option>
					          <option value="Lenguas">Lenguas</option>
					          <option value="Agro y Ambiente">Agro y Ambiente</option>
					          <option value="Comunicación">Comunicación</option>
					          <option value="Informática">Informática</option>
					          <option value="Educación Física">Educación Física</option>
					          <option value="Turismo">Turismo</option>
					          <option value="Arte">Arte</option>
					          <option value="Literatura">Literatura</option>
					          <option value="Educación">Educación</option>
					          <option value="Física y Matemática">Física y Matemática</option>
				          </select>
				        </div>

				        <div class="col m6 s12 offset-m2">
									<h6><b>Turno: </b></h6>
				          <div class="radio-group" required>
										<input type="radio" v-model="newTurno" value="Mañana" id="mañana" />
										<label for="mañana"><b>Mañana</b></label>

										<input type="radio" v-model="newTurno" value="Tarde" id="tarde" />
										<label for="tarde"><b>Tarde</b></label>

										<input type="radio" v-model="newTurno" value="Noche" id="noche" />
										<label for="noche"><b>Noche</b></label>
									</div>
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
	import EventBus from '../../event-bus';

	export default {

		data() {
			return {
				materias: [],
				newMateriaId: '',
				newCurso: '',
				newDivision: '',
				newOrientacion: '',
				newTurno: ''
			}
		},

		methods: {

			change: function(point) {
				this.newCurso = '';
					this.newDivision = '';
					this.newOrientacion = '';
					this.newTurno = '';
				EventBus.$emit('change', point);
			},

			createCursos: function() {
				var url = 'cursos';
				axios.post(url, {
					curso: this.newCurso,
					division: this.newDivision,
					orientacion: this.newOrientacion,
					turno: this.newTurno
				}).then(response => {
					this.newCurso = '';
					this.newDivision = '';
					this.newOrientacion = '';
					this.newTurno = '';
					this.change(1);
					var toastHTML = 'Curso Registrado';
					M.toast({html: toastHTML, classes: 'green'});
				}).catch(error => {
					this.change(1);
					console.log(error.response.data)
				});
			},

			getMaterias: function() {
				var busqueda = document.getElementById('buscar').value;
				if (busqueda == null) {
					var urlMaterias = 'materias';
					axios.get(urlMaterias).then(response => {
						this.materias = response.data.materias.data,
						this.pagination = response.data.pagination,
						console.log(this.materias);
					});
				} else {
					axios.post('buscarMateria', {
						busqueda: busqueda,
					}).then(response => {
						this.materias = response.data;
					}).catch(error => {
						console.log(error.response.data)
					});
				};	
			}
		}	
	}
	
</script>