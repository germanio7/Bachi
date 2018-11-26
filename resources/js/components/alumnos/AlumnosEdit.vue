<template>
  <div>

    <div id="boton_volver">
      <div class="fixed-action-btn">
        <a v-on:click="change(1);" class="btn-floating btn-large waves-effect waves-light blue"><i class="fas fa-arrow-left fa-lg"></i></a>
      </div>
    </div>

  	<form method='POST' v-on:submit.prevent="updateAlumno()">

    	<div class="col s12">
    		<div class="card margin">
    			<div class="card-content">

    				<div>
    					<img src="" width="250">
    					<h5 class="center-align">PLANILLA ANEXA I - RESOLUCION Nº 9558</h5>
    					<br>
    					<h6 class="center-align">Modificar los datos del Alumno {{edit_alumno.id}} {{edit_alumno.apellido}} {{edit_alumno.nombre}}</h6>
    				</div>

    				<div class="divider"></div>
    				<br>

    				<div id="alumno" class="container">

    					<h6><b><u>Datos del Alumno:</u></b></h6>
    					<br>

    						<div class="row">
    							<div class="input-field col m4 s12">
            				<input id="cuil" type="text" class="validate" name="cuil" v-model="edit_alumno.cuil" required/>
            				<span class="helper-text light-green-text text-darken-2">CUIL</span>
          				</div>
    						</div>

    						<div class="row">
    							<div class="input-field col m6 s12">
            				<input id="apellido" type="text" class="validate" name="apellido" v-model="edit_alumno.apellido" required/>
            				<span class="helper-text light-green-text text-darken-2">Apellidos</span>
          				</div>

    							<div class="input-field col m6 s12">
            				<input id="nombre" type="text" class="validate" name="nombre" v-model="edit_alumno.nombre" required/> 
            				<span class="helper-text light-green-text text-darken-2">Nombres</span>
          				</div>
    						</div>

    						<div class="row">
    							<div class="input-field col m4 s12">
            				<input id="fecha_nacimiento" type="text" class="datepicker" name="fecha_nacimiento" required>
            				<span class="helper-text light-green-text text-darken-2">Fecha de Nacimiento</span>
          				</div>
          				<div class="input-field col m4 s12">
            				<input id="lugar" type="text" class="validate" name="lugar_nacimiento" v-model="edit_alumno.lugar_nacimiento" required/>
            				<span class="helper-text light-green-text text-darken-2">Lugar de Nacimiento</span>
          				</div>
          				<div class="input-field col m4 s12">
            				<input id="nacionalidad" type="text" class="validate" name="nacionalidad" v-model="edit_alumno.nacionalidad" required/>
            				<span class="helper-text light-green-text text-darken-2">Nacionalidad</span>
          				</div>
    						</div>

    						<div class="row">
    							<div class="input-field col s12">
            				<input id="domicilio" type="text" class="validate" name="direccion" v-model="edit_alumno.direccion" required/>
            				<span class="helper-text light-green-text text-darken-2">Domicilio</span>
          				</div>
    						</div>

    						<div class="row">
    							<div class="input-field col m6 s12">
            				<input id="barrio" type="text" class="validate" name="barrio" v-model="edit_alumno.barrio"/>
            				<span class="helper-text light-green-text text-darken-2">Barrio</span>
          				</div>
          				<div class="input-field col m6 s12">
            				<select required id="departamento">
                      <option :value="edit_alumno.departamento" disabled selected>Departamento</option>
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
    						    <span class="helper-text light-green-text text-darken-2">Departamento Actual {{edit_alumno.departamento}}</span>
          				</div>
    						</div>

    						<div class="row">
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
                    <td>Asiganación Universal</td>
                    <td>
    									<label>
    						        <input name="asignacion_universal" type="radio" value="1" v-model="edit_alumno.asignacion_universal"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="asignacion_universal" type="radio" value="0" v-model="edit_alumno.asignacion_universal"/>
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Salario Familiar</td>
                    <td>
    									<label>
    						        <input name="salario_familiar" type="radio" value="1" v-model="edit_alumno.salario_familiar"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="salario_familiar" type="radio" value="0" v-model="edit_alumno.salario_familiar"/>
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Pertenece a un Pueblo Originario</td>
                    <td>
    									<label>
    						        <input name="pueblo_originario" type="radio" value="1" v-model="edit_alumno.pueblo_originario"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="pueblo_originario" type="radio" value="0" v-model="edit_alumno.pueblo_originario"/>
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Programa CAI</td>
                    <td>
    									<label>
    						        <input name="programa_cai" type="radio" value="1" v-model="edit_alumno.programa_cai"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="programa_cai" type="radio" value="0" v-model="edit_alumno.programa_cai"/>
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Discapacidad</td>
                    <td>
    									<label>
    						        <input name="discapacidad" type="radio" value="1" v-model="edit_alumno.discapacidad"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="discapacidad" type="radio" value="0" v-model="edit_alumno.discapacidad"/>
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                </tbody>
              </table>
    						</div>
    				</div>

    				<div class="divider"></div>
    				<br>

    				<div id="enfermedades" class="container">

    					<table>
                <thead>
                  <tr>
                    <th>Padece las siguientes enfermedades</th>
                    <th>SI</th>
                    <th>NO</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Diabetes</td>
                    <td>
    									<label>
    						        <input name="diabetes" type="radio" value="1" v-model="edit_alumno.diabetes"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="diabetes" type="radio" value="0"  v-model="edit_alumno.diabetes"/>
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Hernias</td>
                    <td>
    									<label>
    						        <input name="hernias" type="radio" value="1" v-model="edit_alumno.hernias"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="hernias" type="radio" value="0" v-model="edit_alumno.hernias"/>
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Convulsiones</td>
                    <td>
    									<label>
    						        <input name="convulsiones" type="radio" value="1" v-model="edit_alumno.convulsiones"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="convulsiones" type="radio" value="0" v-model="edit_alumno.convulsiones"/>
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Problemas respiratorios</td>
                    <td>
    									<label>
    						        <input name="problemas_respiratorios" type="radio" value="1" v-model="edit_alumno.problemas_respiratorios"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="problemas_respiratorios" type="radio" value="0" v-model="edit_alumno.problemas_respiratorios"/>
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Problemas cardiacos</td>
                    <td>
    									<label>
    						        <input name="problemas_cardiacos" type="radio" value="1" v-model="edit_alumno.problemas_cardiacos"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="problemas_cardiacos" type="radio" value="0" v-model="edit_alumno.problemas_cardiacos"/>
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Alergias (consignar)</td>
                    <td>
    									<label>
    						        <input name="alergias" type="radio" value="1" v-model="edit_alumno.alergias"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="alergias" type="radio" value="0" v-model="edit_alumno.alergias"/>
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>En los últimos 60 días ha padecido: Luxaciones - Esguínces (torceduras de tobillos, hombros, muñecas, etc)</td>
                    <td>
    									<label>
    						        <input name="esguinces" type="radio" value="1" v-model="edit_alumno.esguinces"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="esguinces" type="radio" value="0"  v-model="edit_alumno.esguinces"/>
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Enfermedades Infectocontagiosas: (paperas, sarampión, varicela, etc)</td>
                    <td>
    									<label>
    						        <input name="enfermedades_infectocontagiosas" type="radio" value="1" v-model="edit_alumno.enfermedades_infectocontagiosas"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="enfermedades_infectocontagiosas" type="radio" value="0" v-model="edit_alumno.enfermedades_infectocontagiosas"/>
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Tuvo algún accidente que lo dejo con alguna incapacidad o impedimento</td>
                    <td>
    									<label>
    						        <input name="incapacidad" type="radio" value="1" v-model="edit_alumno.incapacidad"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="incapacidad" type="radio" value="0" v-model="edit_alumno.incapacidad"/>
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                </tbody>
              </table>
    					
    					<br>
    					<p><b class="red-text">Importante</b> actualmente tiene alguna enfermedad o hay otra situación en particular que quisiera informar</p>
              <textarea id="textarea1" class="materialize-textarea" placeholder="Consignar" name="otros" v-model="edit_alumno.otros">
              	<span class="helper-text light-green-text text-darken-2">Consignar</span>
              </textarea>
    					<br>
    				</div>

    				<br>
    				<div class="divider"></div>
    				<br>

    				<div id="documentacion" class="container">
    					<table>
                <thead>
                  <tr>
                    <th>Documentación presentada</th>
                    <th>SI</th>
                    <th>NO</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Certificado de salud</td>
                    <td>
    									<label>
    						        <input name="certificado_salud" type="radio" value="1" v-model="edit_alumno.certificado_salud"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="certificado_salud" type="radio" value="0" v-model="edit_alumno.certificado_salud"/>
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Certificado Buco dental</td>
                    <td>
    									<label>
    						        <input name="certificado_dental" type="radio" value="1" v-model="edit_alumno.certificado_dental"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="certificado_dental" type="radio" value="0" v-model="edit_alumno.certificado_dental"/>
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Fotocopia del Carnet de Vacunación</td>
                    <td>
    									<label>
    						        <input name="carnet_vacuna" type="radio" value="1" v-model="edit_alumno.carnet_vacuna"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="carnet_vacuna" type="radio" value="0" v-model="edit_alumno.carnet_vacuna"/>
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Fotocopia del grupo Sanguíneo</td>
                    <td>
    									<label>
    						        <input name="grupo_sanguineo" type="radio" value="1" v-model="edit_alumno.grupo_sanguineo"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="grupo_sanguineo" type="radio" value="0" v-model="edit_alumno.grupo_sanguineo"/>
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Certificado de finalización del Jardín Infantes</td>
                    <td>
    									<label>
    						        <input name="certificado_nivel_inicial" type="radio" value="1" v-model="edit_alumno.certificado_nivel_inicial"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="certificado_nivel_inicial" type="radio" value="0" v-model="edit_alumno.certificado_nivel_inicial"/>
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Fotocopia del DNI</td>
                    <td>
    									<label>
    						        <input name="fotocopia_dni" type="radio" value="1" v-model="edit_alumno.fotocopia_dni"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="fotocopia_dni" type="radio" value="0" v-model="edit_alumno.fotocopia_dni"/>
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Contribución a Cooperadora</td>
                    <td>
    									<label>
    						        <input name="contribucion_cooperadora" type="radio" value="1" v-model="edit_alumno.contribucion_cooperadora"/>
    						        <span></span>
    						      </label>
                    </td>
                    <td>
                    	<label>
    						        <input name="contribucion_cooperadora" type="radio" value="0" v-model="edit_alumno.contribucion_cooperadora">
    						        <span></span>
    						      </label>
                    </td>
                  </tr>
                </tbody>
              </table>
    				</div>

    			</div>
    			<div class="card-action">
    				<button type="submit" class="btn btn-flat waves-effect waves-green green modal-close white-text">Guardar</button>
    			</div>
    		</div>
    	</div>
      	
    </form>

  </div>
</template>

<script>

  import EventBus from '../../event-bus';

	export default {

    props: ['edit_alumno'],

    created(){
        EventBus.$on('nacimiento', data => {
          var fecha_nacimiento = document.getElementById('fecha_nacimiento');
          fecha_nacimiento.value = data;
        });
      },

		methods: {

      change: function(point) {
        EventBus.$emit('change', point);
      },

			updateAlumno: function() {
        var fecha_nacimiento = document.getElementById('fecha_nacimiento').value;
        var departamento = document.getElementById('departamento').value;
        this.edit_alumno.fecha_nacimiento = fecha_nacimiento;
        this.edit_alumno.departamento = departamento;
				axios.put('alumnos/'+this.edit_alumno.id, this.edit_alumno).then(response => {
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