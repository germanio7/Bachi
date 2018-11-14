

		<form method='POST' v-on:submit.prevent="createAlumno">

			<div class="col s12">
				<div class="card margin">
					<div class="card-content">

						<div id="alumno" class="container">

							<h6><b><u>Datos del Alumno:</u></b></h6>
							<br>

							<div class="row">
									<div class="input-field col m4 s12">
	          				<input id="cuil" type="text" class="validate" name="cuil" v-model="newCuil">
	          				<label for="cuil">CUIL Nº</label>
	        				</div>
								</div>

								<div class="row">
									<div class="input-field col m6 s12">
	          				<input id="apellido" type="text" class="validate" name="apellido" v-model="newApellido">
	          				<label for="apellido">Apellidos</label>
	        				</div>

									<div class="input-field col m6 s12">
	          				<input id="nombre" type="text" class="validate" name="nombre" v-model="newNombre"> 
	          				<label for="nombre">Nombres</label>
	        				</div>
								</div>

								<div class="row">
									<div class="input-field col m4 s12">
	          				<input id="nacimiento" type="text" class="datepicker" name="fecha_nacimiento">
	          				<label for="nacimiento">Fecha de Nacimiento</label>
	        				</div>
	        				<div class="input-field col m4 s12">
	          				<input id="lugar" type="text" class="validate" name="lugar_nacimiento" v-model="newLugarNacimiento">
	          				<label for="lugar">Lugar de Nacimiento</label>
	        				</div>
	        				<div class="input-field col m4 s12">
	          				<input id="nacionalidad" type="text" class="validate" name="nacionalidad" v-model="newNacionalidad">
	          				<label for="nacionalidad">Nacionalidad</label>
	        				</div>
								</div>

								<div class="row">
									<div class="input-field col s12">
	          				<input id="domicilio" type="text" class="validate" name="direccion" v-model="newDireccion">
	          				<label for="domicilio">Domicilio</label>
	        				</div>
								</div>

								<div class="row">
									<div class="input-field col m6 s12">
	          				<input id="barrio" type="text" class="validate" name="barrio" v-model="newBarrio">
	          				<label for="barrio">Barrio</label>
	        				</div>
	        				<div class="input-field col m6 s12">
	          				<input id="departamento" type="text" class="validate" name="departamento" v-model="newDepartamento">
	          				<label for="departamento">Departamento</label>
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
							        <input name="madre_padre" type="radio" value="0" />
							        <span>Madre</span>
							      </label>
									</p>
									<p>
							      <label>
							        <input name="madre_padre" type="radio" value="1" v-model="newMadrePadre" />
							        <span>Padre</span>
							      </label>
							    </p>
							    <br>

				      		<div class="row">
										<div class="input-field col m4 s12">
		          				<input id="cuil_tutor" type="text" class="validate" name="cuil_tutor" v-model="newCuilTutor">
		          				<label for="cuil_tutor">CUIL Nº</label>
		        				</div>
									</div>

									<div class="row">
										<div class="input-field col m6 s12">
		          				<input id="apellido_tutor" type="text" class="validate" name="apellido_tutor" v-model="newApellidoTutor">
		          				<label for="apellido_tutor">Apellidos</label>
		        				</div>

										<div class="input-field col m6 s12">
		          				<input id="nombre_tutor" type="text" class="validate" name="nombre_tutor" v-model="newNombreTutor">
		          				<label for="nombre_tutor">Nombres</label>
		        				</div>
									</div>

									<div class="row">
										<div class="input-field col m4 s12">
		          				<input id="fecha_nacimiento_tutor" type="text" class="datepicker" name="fecha_nacimiento_tutor">
		          				<label for="fecha_nacimiento_tutor">Fecha de Nacimiento</label>
		        				</div>
		        				<div class="input-field col m4 s12">
		          				<input id="lugar_nacimiento_tutor" type="text" class="validate" name="lugar_nacimiento_tutor" v-model="newLugarNacimientoTutor">
		          				<label for="lugar_nacimiento_tutor">Lugar de Nacimiento</label>
		        				</div>
		        				<div class="input-field col m4 s12">
		          				<input id="nacionalidad_tutor" type="text" class="validate" name="nacionalidad_tutor" v-model="newNacionalidadTutor">
		          				<label for="nacionalidad_tutor">Nacionalidad</label>
		        				</div>
									</div>

									<div class="row">
										<div class="input-field col m8 s12">
		          				<input id="direccion_tutor" type="text" class="validate" name="direccion_tutor" v-model="newDireccionTutor">
		          				<label for="direccion_tutor">Domicilio</label>
		        				</div>
		        				<div class="input-field col m4 s12">
		          				<input id="telefono_tutor" type="text" class="validate" name="telefono_tutor" v-model="newTelefonoTutor">
		          				<label for="telefono_tutor">CEL/TEL</label>
		        				</div>
									</div>

									<div class="row">
		        				<div class="input-field col m6 s12">
		          				<input id="barrio_tutor" type="text" class="validate" name="barrio_tutor" v-model="newBarrioTutor">
		          				<label for="barrio_tutor">Barrio</label>
		        				</div>
		        				<div class="input-field col m6 s12">
		          				<input id="departamento_tutor" type="text" class="validate" name="departamento_tutor" v-model="newDepartamentoTutor">
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
										        <input name="a_cargo" type="radio" value="0" />
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
										        <input name="es_tutor" type="radio" value="0"/ >
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
										        <input name="patria_potestad" type="radio" value="0" />
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
										        <input name="vive_con_alumno" type="radio" value="0" />
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
								        <input name="convulsiones" type="radio" value="1" />
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
								        <input name="problemas_respiratorios" type="radio" value="1" />
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
						<button type="submit" class="btn btn-flat waves-effect waves-green green modal-close white-text">Guardar</button>
					</div>
				</div>
			</div>
    	
</form>
