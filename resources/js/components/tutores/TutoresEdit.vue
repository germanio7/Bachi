<template>
	<div>

		<div class="fixed-action-btn" id="boton">
		  <a class="btn-floating btn-large blue" v-on:click="change(1);"><i class="fas fa-arrow-left fa-lg"></i></a>
		</div>

		<div class="col s10 offset-s1">
			<form method='POST' v-on:submit.prevent="updateDocente()">
		    <div class="card">
		    	<div class="card-content">
				    <blockquote><h4>Editar Tutor: {{this.edit_tutor.apellido}} {{this.edit_tutor.nombre}}</h4></blockquote>

						<p>
					    <label>
					      <input name="madre_padre" type="radio" value="0" v-model="edit_tutor.madre_padre" required/>
					      <span>Madre</span>
					    </label>
						</p>
						<p>
					    <label>
					      <input name="madre_padre" type="radio" value="1" v-model="edit_tutor.madre_padre" required/>
					      <span>Padre</span>
					    </label>
					  </p>
						<br>

						<div class="row">
							<div class="input-field col m4 s12">
								<p class="green-text">CUIL</p>
								<input id="cuil_tutor" type="text" class="validate" name="cuil_tutor" v-model="edit_tutor.cuil" required>
							</div>
						</div>

						<div class="row">
							<div class="input-field col m6 s12">
								<p class="green-text">Apellido</p>
								<input id="apellido_tutor" type="text" class="validate" name="apellido_tutor" v-model="edit_tutor.apellido" required>
							</div>

							<div class="input-field col m6 s12">
								<p class="green-text">Nombre</p>
								<input id="nombre_tutor" type="text" class="validate" name="nombre_tutor" v-model="edit_tutor.nombre" required>
							</div>
						</div>

						<div class="row">
							<div class="input-field col m4 s12">
								<p class="green-text">Fecha de Nacimiento</p>
								<input id="fecha_nacimiento_tutor" type="text" class="datepicker" name="fecha_nacimiento_tutor" required>
							</div>
							<div class="input-field col m4 s12">
								<p class="green-text">Lugar de Nacimiento</p>
								<input id="lugar_nacimiento_tutor" type="text" class="validate" name="lugar_nacimiento_tutor" v-model="edit_tutor.lugar_nacimiento" required>
							</div>
							<div class="input-field col m4 s12">
								<p class="green-text">Nacionalidad</p>
								<input id="nacionalidad_tutor" type="text" class="validate" name="nacionalidad_tutor" v-model="edit_tutor.nacionalidad" required>
							</div>
						</div>

						<div class="row">
							<div class="input-field col m8 s12">
								<p class="green-text">Dirección</p>
								<input id="direccion_tutor" type="text" class="validate" name="direccion_tutor" v-model="edit_tutor.direccion" required>
							</div>
							<div class="input-field col m4 s12">
								<p class="green-text">Telefono</p>
								<input id="telefono_tutor" type="text" class="validate" name="telefono_tutor" v-model="edit_tutor.telefono" required>
							</div>
						</div>

						<div class="row">
							<div class="input-field col m6 s12">
								<p class="green-text">Barrio</p>
								<input id="barrio_tutor" type="text" class="validate" name="barrio_tutor" v-model="edit_tutor.barrio">
							</div>
							<div class="input-field col m6 s12">
								<p class="green-text">Departamento</p>
								<select class="browser-default">
									<option value="" disabled selected>{{this.edit_tutor.departamento}}</option>
									<option value="Mayor Luis Jorge Fontana">Mayor Luis Jorge Fontana</option>
						      <option value="Almirante Brown">Almirante Brown</option>
						      <option value="Bermejo">Bermejo</option>
						      <option value="Chacabuco">Chacabuco</option>
						      <option value="Comandante Fernández">Comandante Fernández</option>
						      <option value="Doce de Octubre">Doce de Octubre</option>
						      <option value="Dos de Abril">Dos de Abril</option>
						      <option value="Fray Justo Santa María de Oro">Fray Justo Santa María de Oro</option>
						      <option value="General Belgrano">General Belgrano</option>
						      <option value="General Donovan">General Donovan</option>
						      <option value="General Güemes">General Güemes</option>
						      <option value="Independencia">Independencia</option>
						      <option value="Libertad">Libertad</option>
						      <option value="Libertador General San Martín">Libertador General San Martín</option>
						      <option value="Maipú">Maipú</option>
						      <option value="Nueve de Julio">Nueve de Julio</option>
						      <option value="O'Higgins">O'Higgins</option>
						      <option value="Presidencia de la Plaza">Presidencia de la Plaza</option>
						      <option value="Primero de Mayo">Primero de Mayo</option>
						      <option value="Quitilipi">Quitilipi</option>
						      <option value="San Fernando">San Fernando</option>
						      <option value="San Lorenzo">San Lorenzo</option>
						      <option value="Sargento Cabral">Sargento Cabral</option>
						      <option value="Tapenagá">Tapenagá</option>
						      <option value="Veinticinco de Mayo">Veinticinco de Mayo</option>
						    </select>
							</div>
						</div>

						<table>
					    <thead>
					      <tr>
					        <th></th>
					        <th>SI</th>
					        <th>NO</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td>Esta a Cargo del Alumno</td>
					        <td>
										<label>
							        <input name="a_cargo" type="radio" value="1" v-model="edit_tutor.a_cargo" />
							        <span></span>
							      </label>
					        </td>
					        <td>
					        	<label>
							        <input name="a_cargo" type="radio" value="0" v-model="edit_tutor.a_cargo"/>
							        <span></span>
							      </label>
					        </td>
					      </tr>
					      <tr>
					        <td>Es Tutor del Alumno</td>
					        <td>
										<label>
							        <input name="es_tutor" type="radio" value="1" v-model="edit_tutor.es_tutor"/>
							        <span></span>
							      </label>
					        </td>
					        <td>
					        	<label>
							        <input name="es_tutor" type="radio" value="0" v-model="edit_tutor.es_tutor"/>
							        <span></span>
							      </label>
					        </td>
					      </tr>
					      <tr>
					        <td>Tiene la Patria Potestad del Alumno</td>
					        <td>
										<label>
							        <input name="patria_potestad" type="radio" value="1" v-model="edit_tutor.patria_potestad"/>
							        <span></span>
							      </label>
					        </td>
					        <td>
					        	<label>
							        <input name="patria_potestad" type="radio" value="0" v-model="edit_tutor.patria_potestad"/>
							        <span></span>
							      </label>
					        </td>
					      </tr>
					      <tr>
					        <td>Vive con el Alumno</td>
					        <td>
										<label>
							        <input name="vive_con_alumno" type="radio" value="1" v-model="edit_tutor.vive_con_alumno"/>
							        <span></span>
							      </label>
					        </td>
					        <td>
					        	<label>
							        <input name="vive_con_alumno" type="radio" value="0" v-model="edit_tutor.vive_con_alumno"/>
							        <span></span>
							      </label>
					        </td>
					      </tr>
					    </tbody>
						</table>

						<br>

						<div class="row">
							<div class="input-field col s12">
								<p class="green-text">Ocupación</p>
								<input id="ocupacion" type="text" class="validate" name="ocupacion" v-model="edit_tutor.ocupacion">
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

		props: ['edit_tutor'],

		created(){
        EventBus.$on('nacimiento', data => {
          var fecha_nacimiento = document.getElementById('fecha_nacimiento_tutor');
          fecha_nacimiento.value = data;
        });
      },
	
		methods: {

			change: function(point) {
				EventBus.$emit('change', point);
			},

			updateDocente: function() {
				var fecha_nacimiento = document.getElementById('fecha_nacimiento_tutor').value;
				this.edit_tutor.fecha_nacimiento = fecha_nacimiento;
				axios.put('padres/'+this.edit_tutor.id, this.edit_tutor).then(response => {
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