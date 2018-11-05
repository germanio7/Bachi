@extends('home')

@section('contenido')


		{!! Form::open(['action' => 'AlumnosController@store','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}

			<div class="col s12">	
				<div class="card margin">

	    		<div class="card-content">

			     	<div id="alumno" class="container" style="display: block;">

			     			<p class="center-align"><b>Datos Personales del Alumno</b></p>

								<div class="row">
									<div class="input-field col m4 s12">
	          				<input id="cuil" type="text" class="validate" name="cuil">
	          				<label for="cuil">CUIL Nº</label>
	        				</div>
								</div>

								<div class="row">
									<div class="input-field col m6 s12">
	          				<input id="apellido" type="text" class="validate" name="apellido">
	          				<label for="apellido">Apellidos</label>
	        				</div>

									<div class="input-field col m6 s12">
	          				<input id="nombre" type="text" class="validate" name="nombre">
	          				<label for="nombre">Nombres</label>
	        				</div>
								</div>

								<div class="row">
									<div class="input-field col m4 s12">
	          				<input id="nacimiento" type="text" class="datepicker" name="fecha_nacimiento">
	          				<label for="nacimiento">Fecha de Nacimiento</label>
	        				</div>
	        				<div class="input-field col m4 s12">
	          				<input id="lugar" type="text" class="validate" name="lugar_nacimiento">
	          				<label for="lugar">Lugar de Nacimiento</label>
	        				</div>
	        				<div class="input-field col m4 s12">
	          				<input id="nacionalidad" type="text" class="validate" name="nacionalidad">
	          				<label for="nacionalidad">Nacionalidad</label>
	        				</div>
								</div>

								<div class="row">
									<div class="input-field col m4 s12">
	          				<input id="domiciolio" type="text" class="validate" name="direccion">
	          				<label for="domiciolio">Domicilio</label>
	        				</div>
	        				<div class="input-field col m4 s12">
	          				<input id="barrio" type="text" class="validate" name="barrio">
	          				<label for="barrio">Barrio</label>
	        				</div>
	        				<div class="input-field col m4 s12">
	          				<input id="departamento" type="text" class="validate" name="departamento">
	          				<label for="departamento">Departamento</label>
	        				</div>
								</div>
					  </div>

					  <div id="alumno2" class="container" style="display: none;">

					  	<p class="center-align"><b>Datos Administrativos del Alumno</b></p>

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
								        <input name="asignacion_universal" type="radio" value="1" />
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="asignacion_universal" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Salario Familiar</td>
                    <td>
											<label>
								        <input name="salario_familiar" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="salario_familiar" type="radio" checked value="0"/>
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Pertenece a un Pueblo Originario</td>
                    <td>
											<label>
								        <input name="pueblo_originario" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="pueblo_originario" type="radio" checked value="0"/>
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Programa CAI</td>
                    <td>
											<label>
								        <input name="programa_cai" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="programa_cai" type="radio" checked value="0"/>
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Discapacidad</td>
                    <td>
											<label>
								        <input name="discapacidad" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="discapacidad" type="radio" checked value="0"/>
								        <span></span>
								      </label>
                    </td>
                  </tr>
                </tbody>
              </table>
					  </div>

			      <div id="tutor" style="display: none;">

			      		<p class="center-align"><b>Datos Personales del Tutor</b></p>
								
								<div class="container">
								<br>				
									<p>
							      <label>
							        <input name="madre_padre" type="radio" value="0" />
							        <span>Madre</span>
							      </label>
									</p>
									<p>
							      <label>
							        <input name="madre_padre" type="radio" value="1" />
							        <span>Padre</span>
							      </label>
							    </p>
							    <br>

				      		<div class="row">
										<div class="input-field col m4 s12">
		          				<input id="cuil_tutor" type="text" class="validate" name="cuil_tutor">
		          				<label for="cuil_tutor">CUIL Nº</label>
		        				</div>
									</div>

									<div class="row">
										<div class="input-field col m6 s12">
		          				<input id="apellido_tutor" type="text" class="validate" name="apellido_tutor">
		          				<label for="apellido_tutor">Apellidos</label>
		        				</div>

										<div class="input-field col m6 s12">
		          				<input id="nombre_tutor" type="text" class="validate" name="nombre_tutor">
		          				<label for="nombre_tutor">Nombres</label>
		        				</div>
									</div>

									<div class="row">
										<div class="input-field col m4 s12">
		          				<input id="fecha_nacimiento_tutor" type="text" class="datepicker" name="fecha_nacimiento_tutor">
		          				<label for="fecha_nacimiento_tutor">Fecha de Nacimiento</label>
		        				</div>
		        				<div class="input-field col m4 s12">
		          				<input id="lugar_nacimiento_tutor" type="text" class="validate" name="lugar_nacimiento_tutor">
		          				<label for="lugar_nacimiento_tutor">Lugar de Nacimiento</label>
		        				</div>
		        				<div class="input-field col m4 s12">
		          				<input id="nacionalidad_tutor" type="text" class="validate" name="nacionalidad_tutor">
		          				<label for="nacionalidad_tutor">Nacionalidad</label>
		        				</div>
									</div>

									<div class="row">
										<div class="input-field col m4 s12">
		          				<input id="direccion_tutor" type="text" class="validate" name="direccion_tutor">
		          				<label for="direccion_tutor">Domicilio</label>
		        				</div>
		        				<div class="input-field col m4 s12">
		          				<input id="barrio_tutor" type="text" class="validate" name="barrio_tutor">
		          				<label for="barrio_tutor">Barrio</label>
		        				</div>
		        				<div class="input-field col m4 s12">
		          				<input id="departamento_tutor" type="text" class="validate" name="departamento_tutor">
		          				<label for="departamento_tutor">Departamento</label>
		        				</div>
									</div>

	              </div>
			      </div>

			      <div id="tutor2" style="display: none;">

			      	<p class="center-align"><b>Datos del Tutor en relación con el Alumno</b></p>

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
										        <input name="a_cargo" type="radio" value="1" />
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
										        <input name="es_tutor" type="radio" value="1"/>
										        <span></span>
										      </label>
		                    </td>
		                    <td>
		                    	<label>
										        <input name="es_tutor" type="radio" value="0"/>
										        <span></span>
										      </label>
		                    </td>
		                  </tr>
		                  <tr>
		                    <td>Tiene la Patria Potestad del Alumno</td>
		                    <td>
													<label>
										        <input name="patria_potestad" type="radio" value="1"/>
										        <span></span>
										      </label>
		                    </td>
		                    <td>
		                    	<label>
										        <input name="patria_potestad" type="radio" value="0"/>
										        <span></span>
										      </label>
		                    </td>
		                  </tr>
		                  <tr>
		                    <td>Vive con el Alumno</td>
		                    <td>
													<label>
										        <input name="vive_con_alumno" type="radio" value="1"/>
										        <span></span>
										      </label>
		                    </td>
		                    <td>
		                    	<label>
										        <input name="vive_con_alumno" type="radio" value="0"/>
										        <span></span>
										      </label>
		                    </td>
		                  </tr>
		                </tbody>
	              	</table>

	              	<br>

	              	<div class="row">
										<div class="input-field col s12">
		          				<input id="ocupacion" type="text" class="validate" name="ocupacion">
		          				<label for="ocupacion">Ocupación</label>
		        				</div>
									</div>
			      </div>

						<div id="enfermedades" style="display: none;">
							
							<p class="center-align"><b>Información Médica del Alumno</b></p>

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
								        <input name="diabetes" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="diabetes" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Hernias</td>
                    <td>
											<label>
								        <input name="hernias" type="radio" value="1"/>
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
								        <input name="convulsiones" type="radio" value="1"/>
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
								        <input name="problemas_respiratorios" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="problemas_respiratorios" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Problemas cardiacos</td>
                    <td>
											<label>
								        <input name="problemas_cardiacos" type="radio" value="1"/>
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
								        <input name="alergias" type="radio" value="1"/>
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
								        <input name="esguinces" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="esguinces" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Enfermedades Infectocontagiosas: (paperas, sarampión, varicela, etc)</td>
                    <td>
											<label>
								        <input name="enfermedades_infectocontagiosas" type="radio" value="1"/>
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
								        <input name="incapacidad" type="radio" value="1"/>
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
              <textarea id="textarea1" class="materialize-textarea" placeholder="Consignar" name="otros"></textarea>
							<br>
			      </div>

			      <div id="documentacion" style="display: none;">
							
							<p class="center-align"><b>Documentación presentada por el Alumno</b></p>

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
								        <input name="certificado_salud" type="radio" value="1"/>
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
								        <input name="certificado_dental" type="radio" value="1"/>
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
								        <input name="carnet_vacuna" type="radio" value="1"/>
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
								        <input name="grupo_sanguineo" type="radio" value="1"/>
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
								        <input name="certificado_nivel_inicial" type="radio" value="1"/>
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
								        <input name="fotocopia_dni" type="radio" value="1"/>
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
								        <input name="contribucion_cooperadora" type="radio" value="1"/>
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

					<div class="card-action grey lighten-5">
						<a id="falso" class="grey-text"><i class="fas fa-angle-left fa-4x"></i></a>
						<a id="antes" class="tooltipped" data-position="top" data-tooltip="Anterior" style="display: none; cursor: pointer;" onclick="anterior();"><i class="fas fa-angle-left fa-4x"></i></a>
          	<a class="right tooltipped" data-position="top" data-tooltip="Siguiente" id="sigue" style="cursor: pointer;" onclick="siguiente();"><i class="fas fa-angle-right fa-4x"></i></a>
          	<div class="right" id="submit" style="display: none;">
							{{ Form::submit('Guardar',(['class'=>'btn btn-large green'])) }}
						</div>
        	</div>

	  		</div>
	  	</div>
    	
		{!! Form::close() !!}

@endsection