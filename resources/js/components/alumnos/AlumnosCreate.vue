	<template>

	<div>

		<div id="boton_volver">
			<div class="fixed-action-btn">
				<a v-on:click="change(1);" class="btn-floating btn-large waves-effect waves-light blue"><i class="fas fa-arrow-left fa-lg"></i></a>
			</div>
		</div>

			<form method='POST' v-on:submit.prevent="createAlumno">

				<div class="col s12">
					<div class="card margin">
						<div class="card-content">

							<div>
								<img src="" width="250">
								<h5 class="center-align">PLANILLA ANEXA I - RESOLUCION Nº 9558</h5>
							</div>

							<div class="divider"></div>
							<br>

							<div id="alumno" class="container">

								<h6><b><u>Datos del Alumno:</u></b></h6>
								<br>

									<div class="row">
										<div class="input-field col m4 s12">
		          				<input id="cuil" type="text" class="validate" name="cuil" v-model="newCuil" required/>
		          				<label for="cuil">CUIL Nº</label>
		        				</div>
									</div>

									<div class="row">
										<div class="input-field col m6 s12">
		          				<input id="apellido" type="text" class="validate" name="apellido" v-model="newApellido" required/>
		          				<label for="apellido">Apellidos</label>
		        				</div>

										<div class="input-field col m6 s12">
		          				<input id="nombre" type="text" class="validate" name="nombre" v-model="newNombre" required/> 
		          				<label for="nombre">Nombres</label>
		        				</div>
									</div>

									<div class="row">
										<div class="input-field col m4 s12">
		          				<input id="nacimiento" type="text" class="datepicker" name="fecha_nacimiento" required>
		          				<label for="nacimiento">Fecha de Nacimiento</label>
		        				</div>
		        				<div class="input-field col m4 s12">
		          				<input id="lugar" type="text" class="validate" name="lugar_nacimiento" v-model="newLugarNacimiento" required/>
		          				<label for="lugar">Lugar de Nacimiento</label>
		        				</div>
		        				<div class="input-field col m4 s12">
		          				<input id="nacionalidad" type="text" class="validate" name="nacionalidad" value="Argentina"  required/>
		          				<label for="nacionalidad">Nacionalidad</label>
		        				</div>
									</div>

									<div class="row">
										<div class="input-field col s12">
		          				<input id="domicilio" type="text" class="validate" name="direccion" v-model="newDireccion" required/>
		          				<label for="domicilio">Domicilio</label>
		        				</div>
									</div>

									<div class="row">
										<div class="input-field col m6 s12">
		          				<input id="barrio" type="text" class="validate" name="barrio" v-model="newBarrio"/>
		          				<label for="barrio">Barrio</label>
		        				</div>
		        				<div class="input-field col m6 s12">
		          				<select id="departamento" required>
									      <option value="Mayor Luis Jorge Fontana" selected>Mayor Luis Jorge Fontana</option>
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
									    <label>Departamento</label>
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
									        <input name="asignacion_universal" type="radio" value="1" v-model="newAsignacionUniversal"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="asignacion_universal" type="radio" checked value="0"/>
									        <span></span>
									      </label>
		                  </td>
		                </tr>
		                <tr>
		                  <td>Salario Familiar</td>
		                  <td>
												<label>
									        <input name="salario_familiar" type="radio" value="1" v-model="newSalarioFamiliar"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="salario_familiar" type="radio" checked value="0" />
									        <span></span>
									      </label>
		                  </td>
		                </tr>
		                <tr>
		                  <td>Pertenece a un Pueblo Originario</td>
		                  <td>
												<label>
									        <input name="pueblo_originario" type="radio" value="1" v-model="newPuebloOriginario"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="pueblo_originario" type="radio" checked value="0" />
									        <span></span>
									      </label>
		                  </td>
		                </tr>
		                <tr>
		                  <td>Programa CAI</td>
		                  <td>
												<label>
									        <input name="programa_cai" type="radio" value="1" v-model="newProgramaCai"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="programa_cai" type="radio" checked value="0" />
									        <span></span>
									      </label>
		                  </td>
		                </tr>
		                <tr>
		                  <td>Discapacidad</td>
		                  <td>
												<label>
									        <input name="discapacidad" type="radio" value="1" v-model="newDiscapacidad"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="discapacidad" type="radio" checked value="0" />
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

							<div id="tutor" class="container">
								<h6><b><u>Datos de la Familia o Tutor</u></b></h6>
								<br>

										<p>
								      <label>
								        <input name="madre_padre" type="radio" value="0" v-model="newMadrePadre" required/>
								        <span>Madre</span>
								      </label>
										</p>
										<p>
								      <label>
								        <input name="madre_padre" type="radio" value="1" v-model="newMadrePadre" required/>
								        <span>Padre</span>
								      </label>
								    </p>
								    <br>

					      		<div class="row">
											<div class="input-field col m4 s12">
			          				<input id="cuil_tutor" type="text" class="validate" name="cuil_tutor" v-model="newCuilTutor" required>
			          				<label for="cuil_tutor">CUIL Nº</label>
			        				</div>
										</div>

										<div class="row">
											<div class="input-field col m6 s12">
			          				<input id="apellido_tutor" type="text" class="validate" name="apellido_tutor" v-model="newApellidoTutor" required>
			          				<label for="apellido_tutor">Apellidos</label>
			        				</div>

											<div class="input-field col m6 s12">
			          				<input id="nombre_tutor" type="text" class="validate" name="nombre_tutor" v-model="newNombreTutor" required>
			          				<label for="nombre_tutor">Nombres</label>
			        				</div>
										</div>

										<div class="row">
											<div class="input-field col m4 s12">
			          				<input id="fecha_nacimiento_tutor" type="text" class="datepicker" name="fecha_nacimiento_tutor" required>
			          				<label for="fecha_nacimiento_tutor">Fecha de Nacimiento</label>
			        				</div>
			        				<div class="input-field col m4 s12">
			          				<input id="lugar_nacimiento_tutor" type="text" class="validate" name="lugar_nacimiento_tutor" v-model="newLugarNacimientoTutor" required>
			          				<label for="lugar_nacimiento_tutor">Lugar de Nacimiento</label>
			        				</div>
			        				<div class="input-field col m4 s12">
			          				<input id="nacionalidad_tutor" type="text" class="validate" name="nacionalidad_tutor" value="Argentina" required>
			          				<label for="nacionalidad_tutor">Nacionalidad</label>
			        				</div>
										</div>

										<div class="row">
											<div class="input-field col m8 s12">
			          				<input id="direccion_tutor" type="text" class="validate" name="direccion_tutor" v-model="newDireccionTutor" required>
			          				<label for="direccion_tutor">Domicilio</label>
			        				</div>
			        				<div class="input-field col m4 s12">
			          				<input id="telefono_tutor" type="text" class="validate" name="telefono_tutor" v-model="newTelefonoTutor" required>
			          				<label for="telefono_tutor">CEL/TEL</label>
			        				</div>
										</div>

										<div class="row">
			        				<div class="input-field col m6 s12">
			          				<input id="barrio_tutor" type="text" class="validate" name="barrio_tutor" v-model="newBarrioTutor">
			          				<label for="barrio_tutor">Barrio</label>
			        				</div>
			        				<div class="input-field col m6 s12">
			          				<select id="departamento_tutor" required>
										      <option value="Mayor Luis Jorge Fontana" selected>Mayor Luis Jorge Fontana</option>
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
			          				<label for="departamento_tutor">Departamento</label>
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
											        <input name="a_cargo" type="radio" value="1" v-model="newACargo" />
											        <span></span>
											      </label>
			                    </td>
			                    <td>
			                    	<label>
											        <input name="a_cargo" type="radio" value="0" checked/>
											        <span></span>
											      </label>
			                    </td>
			                  </tr>
			                  <tr>
			                    <td>Es Tutor del Alumno</td>
			                    <td>
														<label>
											        <input name="es_tutor" type="radio" value="1" v-model="newEsTutor"/>
											        <span></span>
											      </label>
			                    </td>
			                    <td>
			                    	<label>
											        <input name="es_tutor" type="radio" value="0" checked/>
											        <span></span>
											      </label>
			                    </td>
			                  </tr>
			                  <tr>
			                    <td>Tiene la Patria Potestad del Alumno</td>
			                    <td>
														<label>
											        <input name="patria_potestad" type="radio" value="1" v-model="newPatriaPotestad"/>
											        <span></span>
											      </label>
			                    </td>
			                    <td>
			                    	<label>
											        <input name="patria_potestad" type="radio" value="0" checked/>
											        <span></span>
											      </label>
			                    </td>
			                  </tr>
			                  <tr>
			                    <td>Vive con el Alumno</td>
			                    <td>
														<label>
											        <input name="vive_con_alumno" type="radio" value="1" v-model="newViveConAlumno"/>
											        <span></span>
											      </label>
			                    </td>
			                    <td>
			                    	<label>
											        <input name="vive_con_alumno" type="radio" value="0" checked/>
											        <span></span>
											      </label>
			                    </td>
			                  </tr>
			                </tbody>
		              	</table>

		              	<br>

		              	<div class="row">
											<div class="input-field col s12">
			          				<input id="ocupacion" type="text" class="validate" name="ocupacion" v-model="newOcupacion">
			          				<label for="ocupacion">Ocupación</label>
			        				</div>
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
									        <input name="diabetes" type="radio" value="1" v-model="newDiabetes"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="diabetes" type="radio" checked value="0"  />
									        <span></span>
									      </label>
		                  </td>
		                </tr>
		                <tr>
		                  <td>Hernias</td>
		                  <td>
												<label>
									        <input name="hernias" type="radio" value="1" v-model="newHernias"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="hernias" type="radio" checked value="0" />
									        <span></span>
									      </label>
		                  </td>
		                </tr>
		                <tr>
		                  <td>Convulsiones</td>
		                  <td>
												<label>
									        <input name="convulsiones" type="radio" value="1" v-model="newConvulsiones"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="convulsiones" type="radio" checked value="0" />
									        <span></span>
									      </label>
		                  </td>
		                </tr>
		                <tr>
		                  <td>Problemas respiratorios</td>
		                  <td>
												<label>
									        <input name="problemas_respiratorios" type="radio" value="1" v-model="newProblemasRespiratorios"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="problemas_respiratorios" type="radio" checked value="0"  />
									        <span></span>
									      </label>
		                  </td>
		                </tr>
		                <tr>
		                  <td>Problemas cardiacos</td>
		                  <td>
												<label>
									        <input name="problemas_cardiacos" type="radio" value="1" v-model="newProblemasCardiacos"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="problemas_cardiacos" type="radio" checked value="0" />
									        <span></span>
									      </label>
		                  </td>
		                </tr>
		                <tr>
		                  <td>Alergias (consignar)</td>
		                  <td>
												<label>
									        <input name="alergias" type="radio" value="1" v-model="newAlergias"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="alergias" type="radio" checked value="0" />
									        <span></span>
									      </label>
		                  </td>
		                </tr>
		                <tr>
		                  <td>En los últimos 60 días ha padecido: Luxaciones - Esguínces (torceduras de tobillos, hombros, muñecas, etc)</td>
		                  <td>
												<label>
									        <input name="esguinces" type="radio" value="1" v-model="newEsguiences"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="esguinces" type="radio" checked value="0"  />
									        <span></span>
									      </label>
		                  </td>
		                </tr>
		                <tr>
		                  <td>Enfermedades Infectocontagiosas: (paperas, sarampión, varicela, etc)</td>
		                  <td>
												<label>
									        <input name="enfermedades_infectocontagiosas" type="radio" value="1" v-model="newEnfermedadesInfectocontagiosas"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="enfermedades_infectocontagiosas" type="radio" checked value="0" />
									        <span></span>
									      </label>
		                  </td>
		                </tr>
		                <tr>
		                  <td>Tuvo algún accidente que lo dejo con alguna incapacidad o impedimento</td>
		                  <td>
												<label>
									        <input name="incapacidad" type="radio" value="1" v-model="newIncapacidad"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="incapacidad" type="radio" checked value="0" />
									        <span></span>
									      </label>
		                  </td>
		                </tr>
		              </tbody>
		            </table>
								
								<br>
								<p><b class="red-text">Importante</b> actualmente tiene alguna enfermedad o hay otra situación en particular que quisiera informar</p>
		            <textarea id="textarea1" class="materialize-textarea" placeholder="Consignar" name="otros" v-model="newOtros"></textarea>
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
									        <input name="certificado_salud" type="radio" value="1" v-model="newCertificadoSalud"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="certificado_salud" type="radio" checked value="0" />
									        <span></span>
									      </label>
		                  </td>
		                </tr>
		                <tr>
		                  <td>Certificado Buco dental</td>
		                  <td>
												<label>
									        <input name="certificado_dental" type="radio" value="1" v-model="newCertificadoDental"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="certificado_dental" type="radio" checked value="0" />
									        <span></span>
									      </label>
		                  </td>
		                </tr>
		                <tr>
		                  <td>Fotocopia del Carnet de Vacunación</td>
		                  <td>
												<label>
									        <input name="carnet_vacuna" type="radio" value="1" v-model="newCarnetVacuna"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="carnet_vacuna" type="radio" checked value="0" />
									        <span></span>
									      </label>
		                  </td>
		                </tr>
		                <tr>
		                  <td>Fotocopia del grupo Sanguíneo</td>
		                  <td>
												<label>
									        <input name="grupo_sanguineo" type="radio" value="1" v-model="newGrupoSanguineo"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="grupo_sanguineo" type="radio" checked value="0" />
									        <span></span>
									      </label>
		                  </td>
		                </tr>
		                <tr>
		                  <td>Certificado de finalización del Jardín Infantes</td>
		                  <td>
												<label>
									        <input name="certificado_nivel_inicial" type="radio" value="1" v-model="newCertificadoNivelInicial"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="certificado_nivel_inicial" type="radio" checked value="0" />
									        <span></span>
									      </label>
		                  </td>
		                </tr>
		                <tr>
		                  <td>Fotocopia del DNI</td>
		                  <td>
												<label>
									        <input name="fotocopia_dni" type="radio" value="1" v-model="newFotocopiaDni"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="fotocopia_dni" type="radio" checked value="0" />
									        <span></span>
									      </label>
		                  </td>
		                </tr>
		                <tr>
		                  <td>Contribución a Cooperadora</td>
		                  <td>
												<label>
									        <input name="contribucion_cooperadora" type="radio" value="1" v-model="newContribucionCooperadora"/>
									        <span></span>
									      </label>
		                  </td>
		                  <td>
		                  	<label>
									        <input name="contribucion_cooperadora" type="radio" checked value="0" />
									        <span></span>
									      </label>
		                  </td>
		                </tr>
		              </tbody>
		            </table>
							</div>

						</div>
						<div class="card-action">
							<button type="submit" class="btn btn-flat waves-effect waves-green green modal-close white-text"><i class="fas fa-save fa-lg"></i> Guardar</button>
						</div>
					</div>
				</div>
		  	
		</form>

	</div>

</template>

<script>

import axios from 'axios';
import EventBus from '../../event-bus';

export default {
	data() {
		return	{
			newCuil: '',
			newApellido: '',
			newNombre: '',
			newFechaNacimiento: '',
			newLugarNacimiento: '',
			newNacionalidad: '',
			newDireccion: '',
			newBarrio: '',
			newDepartamento: '',
			newAsignacionUniversal: 0,
			newSalarioFamiliar: 0,
			newPuebloOriginario: 0,
			newProgramaCai: 0,
			newDiscapacidad: 0,
			newMadrePadre: '',
			newCuilTutor: '',
			newApellidoTutor: '',
			newNombreTutor: '',
			newFechaNacimientoTutor: '',
			newLugarNacimientoTutor: '',
			newNacionalidadTutor: '',
			newDireccionTutor: '',
			newTelefonoTutor: '',
			newBarrioTutor: '',
			newDepartamentoTutor: '',
			newACargo: 0,
			newEsTutor: 0,
			newPatriaPotestad: 0,
			newViveConAlumno: 0,
			newOcupacion: '',
			newDiabetes: 0,
			newHernias: 0,
			newConvulsiones: 0,
			newProblemasRespiratorios: 0,
			newProblemasCardiacos: 0,
			newAlergias: 0,
			newEsguiences: 0,
			newEnfermedadesInfectocontagiosas: 0,
			newIncapacidad: 0,
			newOtros: '',
			newCertificadoSalud: 0,
			newCertificadoDental: 0,
			newCarnetVacuna: 0,
			newGrupoSanguineo: 0,
			newCertificadoNivelInicial: 0,
			newFotocopiaDni: 0,
			newContribucionCooperadora: 0,
			newCurso: 0
		}
	},
	methods: {

		change: function(point) {
			EventBus.$emit('change', point);
		},

		createAlumno: function(){
			var url = 'alumnos';
			var nacimiento = document.getElementById('nacimiento').value;
			var nacionalidad = document.getElementById('nacionalidad').value;
			var departamento = document.getElementById('departamento').value;
			var fecha_nacimiento_tutor = document.getElementById('fecha_nacimiento_tutor').value;
			var nacionalidad_tutor = document.getElementById('nacionalidad_tutor').value;
			var departamento_tutor = document.getElementById('departamento_tutor').value;
			this.newFechaNacimiento = nacimiento;
			this.newNacionalidad = nacionalidad;
			this.newDepartamento = departamento;
			this.newFechaNacimientoTutor = fecha_nacimiento_tutor;
			this.newNacionalidadTutor = nacionalidad_tutor;
			this.newDepartamentoTutor = departamento_tutor;
			axios.post(url, {
				//Datos Alumnos
				cuil: this.newCuil,
				apellido: this.newApellido,
				nombre: this.newNombre,
				fecha_nacimiento: this.newFechaNacimiento,
				lugar_nacimiento: this.newLugarNacimiento,
				nacionalidad: this.newNacionalidad,
				direccion: this.newDireccion,
				barrio: this.newBarrio,
				departamento: this.newDepartamento,
				asignacion_universal: this.newAsignacionUniversal,
				salario_familiar: this.newSalarioFamiliar,
				pueblo_originario: this.newPuebloOriginario,
				programa_cai: this.newProgramaCai,
				discapacidad: this.newDiscapacidad,
				diabetes: this.newDiabetes,
				hernias: this.newHernias,
				convulsiones: this.newConvulsiones,
				problemas_respiratorios: this.newProblemasRespiratorios,
				problemas_cardiacos: this.newProblemasCardiacos,
				alergias: this.newAlergias,
				esguinces: this.newEsguiences,
				enfermedades_infectocontagiosas: this.newEnfermedadesInfectocontagiosas,
				incapacidad: this.newIncapacidad,
				otros: this.newOtros,
				certificado_salud: this.newCertificadoSalud,
				certificado_dental: this.newCertificadoDental,
				carnet_vacuna: this.newCarnetVacuna,
				grupo_sanguineo: this.newGrupoSanguineo,
				certificado_nivel_inicial: this.newCertificadoNivelInicial,
				fotocopia_dni: this.newFotocopiaDni,
				contribucion_cooperadora: this.newContribucionCooperadora,
				//Datos Tutor
				madre_padre: this.newMadrePadre,
				cuil_tutor: this.newCuilTutor,
				apellido_tutor: this.newApellidoTutor,
				nombre_tutor: this.newNombreTutor,
				fecha_nacimiento_tutor: this.newFechaNacimientoTutor,
				lugar_nacimiento_tutor: this.newLugarNacimientoTutor,
				nacionalidad_tutor: this.newNacionalidadTutor,
				direccion_tutor: this.newDireccionTutor,
				barrio_tutor: this.newBarrioTutor,
				departamento_tutor: this.newDepartamentoTutor,
				telefono_tutor: this.newTelefonoTutor,
				a_cargo: this.newACargo,
				es_tutor: this.newEsTutor,
				patria_potestad: this.newPatriaPotestad,
				vive_con_alumno: this.newViveConAlumno,
				ocupacion: this.newOcupacion
			}).then(response => {
				var alumno_id = response.data;
				var toastHTML = '<span>Alumno Registrado</span><a href="/inscripcion/'+alumno_id+'" class="btn-flat toast-action white-text">Ver Planilla</a>';
				M.toast({html: toastHTML, classes: 'green'});
				this.newCuil = '';
				this.newApellido = '';
				this.newNombre = '';
				this.newFechaNacimiento = '';
				this.newLugarNacimiento = '';
				this.newNacionalidad = '';
				this.newDireccion = '';
				this.newBarrio = '';
				this.newDepartamento = '';
				this.newAsignacionUniversal = 0;
				this.newSalarioFamiliar = 0;
				this.newPuebloOriginario = 0;
				this.newProgramaCai = 0;
				this.newDiscapacidad = 0;
				this.newMadrePadre = 0;
				this.newCuilTutor = '';
				this.newApellidoTutor = '';
				this.newNombreTutor = '';
				this.newFechaNacimientoTutor = '';
				this.newLugarNacimientoTutor = '';
				this.newNacionalidadTutor = '';
				this.newDireccionTutor = '';
				this.newTelefonoTutor = '';
				this.newBarrioTutor = '';
				this.newDepartamentoTutor = '';
				this.newACargo = 0;
				this.newEsTutor = 0;
				this.newPatriaPotestad = 0;
				this.newViveConAlumno = 0;
				this.newOcupacion = '';
				this.newDiabetes = 0;
				this.newHernias = 0;
				this.newConvulsiones = 0;
				this.newProblemasRespiratorios = 0;
				this.newProblemasCardiacos = 0;
				this.newAlergias = 0;
				this.newEsguiences = 0;
				this.newEnfermedadesInfectocontagiosas = 0;
				this.newIncapacidad = 0;
				this.newOtros = '';
				this.newCertificadoSalud = 0;
				this.newCertificadoDental = 0;
				this.newCarnetVacuna = 0;
				this.newGrupoSanguineo = 0;
				this.newCertificadoNivelInicial = 0;
				this.newFotocopiaDni = 0;
				this.newContribucionCooperadora = 0;
				this.change(1);
			}).catch(error => {
				this.change(1);
				this.getAlumnos();
				M.toast({html: 'X Error', classes: 'red'})
				console.log(error.response.data)
			});
		}
	}
}

</script>