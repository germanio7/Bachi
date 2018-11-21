@extends('home')

@section('contenido')

	<div class="row" id="crud_alumno">
		<div class="margin" id="inicio">

			<div class="fixed-action-btn" id="boton_crear">
		  		<a class="btn-floating btn-large green waves-effect waves-light" v-on:click="change(2)"><i class="fas fa-plus fa-lg"></i></a>
			</div>
			<div class="fixed-action-btn" id="boton_editar" style="display: none;">
		  		<a class="btn-floating btn-large blue waves-effect waves-light" v-on:click="change(1)"><i class="fas fa-arrow-left fa-lg"></i></a>
			</div>

			<div id="index">
				<blockquote><h1>Alumnos</h1></blockquote>

				<table class="striped">
					<thead>
						<tr>
							<th>Cuil</th>
							<th>Apellido</th>
							<th>Nombre</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="alumno in alumnos">
							<td>@{{alumno.id}}</td>
							<td>@{{alumno.apellido}}</td>
							<td>@{{alumno.nombre}}</td>
							<td>
								<div class="btn-group" role="group">
						      <a class="btn blue"><i class="fas fa-print fa-lg"></i></a>
						      <a class="btn green" v-on:click.prevent="editAlumno(alumno)"><i class="fas fa-pen fa-lg"></i></a>
									<a class="btn red darken-4" v-on:click.prevent="deleteAlumno(alumno)"><i class="fas fa-trash fa-lg"></i></a>
						    </div>
							</td>
						</tr>
					</tbody>
				</table>

				<ul class="pagination">
			    <li v-if="pagination.current_page > 1"><a href="" @click.prevent="changePage(pagination.current_page - 1)"><i class="fas fa-arrow-left fa-lg"></i></a></li>
			    <li v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active light-green darken-2' : '']">
			    	<a href="" @click.prevent="changePage(page)">@{{ page }}</a>
			    </li>
			    <li v-if="pagination.current_page < pagination.last_page"><a href="" @click.prevent="changePage(pagination.current_page + 1)"><i class="fas fa-arrow-right fa-lg"></i></a></li>
			  </ul>
			</div>

			<div id="create" style="display: none;">
				@include('alumnos.create')
			</div>
			<div id="edit" style="display: none;">
				@include('alumnos.edit')
			</div>
			
		</div>
	</div>
	<script src="{{asset('/js/app.js')}}"></script>
	<script>
			new Vue({

				el: '#crud_alumno',

				created: function() {
					this.getAlumnos();
				},

				data: {
					alumnos: [],
					offset: 2,
					pagination: {
						'total': 0, 
            'current_page': 0, 
            'per_page': 0,
            'last_page': 0, 
            'from': 0, 
            'to': 0 
					},
					fillAlumnos: {
						id: '',
						cuil: '',
						apellido: '',
						nombre: '',
						fecha_nacimiento: '',
						lugar_nacimiento: '',
						nacionalidad: '',
						direccion: '',
						barrio: '',
						departamento: '',
						asignacion_universal: '',
						salario_familiar: '',
						pueblo_originario: '',
						programa_cai: '',
						discapacidad: '',
						diabetes: '',
						hernias: '',
						convulsiones: '',
						problemas_respiratorios: '',
						problemas_cardiacos: '',
						alergias: '',
						esguinces: '',
						enfermedades_infectocontagiosas: '',
						incapacidad: '',
						otros: '',
						certificado_salud: '',
						certificado_dental: '',
						carnet_vacuna: '',
						grupo_sanguineo: '',
						certificado_nivel_inicial: '',
						fotocopia_dni: '',
						contribucion_cooperadora: ''
					},
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
				},
				computed: {
					isActived: function() {
						return this.pagination.current_page;
					},
					pagesNumber: function() {
						if(!this.pagination.to){
								return [];
						}

						var from = this.pagination.current_page - this.offset;
						if(from < 1){
							from = 1;
						}

						var to = from + (this.offset * 2);
						if(to >= this.pagination.last_page){
							to = this.pagination.last_page;
						}

						var pagesArray = [];
						while(from <= to){
							pagesArray.push(from);
							from++;
						}
						return pagesArray;
					}
				},
				methods: {
					getAlumnos: function(page) {
						var urlAlumnos = 'alumnos?page='+page;
						axios.get(urlAlumnos).then(response => {
							this.alumnos = response.data.alumnos.data,
							this.pagination = response.data.pagination
						});
					},
					change: function(point) {
						var boton_crear = document.getElementById('boton_crear');
						var boton_editar = document.getElementById('boton_editar');
						var index = document.getElementById('index');
						var crear = document.getElementById('create');
						var edit = document.getElementById('edit');
						if(point == 1){
							boton_crear.style.display = 'block';
							boton_editar.style.display = 'none';
							crear.style.display = 'none';
							index.style.display = 'block';
							edit.style.display	= 'none';
						}else if(point == 2) {	
							boton_crear.style.display = 'none';
							boton_editar.style.display = 'block';
							crear.style.display = 'block';
							index.style.display = 'none';
							edit.style.display	= 'none';			
						}else if(point == 3) {
							boton_crear.style.display = 'none';
							boton_editar.style.display = 'block';
							crear.style.display = 'none';
							index.style.display = 'none';
							edit.style.display	= 'block';
						}
					},
					deleteAlumno: function(alumno) {
						var id = alumno.id;
						axios.delete('alumnos/' + id).then(response => {
							this.getAlumnos();
							M.toast({html: 'Alumno Eliminado', classes: 'red'})
						});
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
							this.change(1);
							this.getAlumnos();
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
						}).catch(error => {
							this.change(1);
							this.getAlumnos();
							M.toast({html: 'X Error', classes: 'red'})
							console.log(error.response.data)
						});
					},
					editAlumno: function(alumno) {
						this.change(3);
						var edit_nacimiento = document.getElementById('edit_nacimiento');
						edit_nacimiento.value = alumno.fecha_nacimiento;
						this.fillAlumnos.id = alumno.id;
						this.fillAlumnos.cuil = alumno.cuil;
						this.fillAlumnos.apellido = alumno.apellido;
						this.fillAlumnos.nombre = alumno.nombre;
						this.fillAlumnos.lugar_nacimiento = alumno.lugar_nacimiento;
						this.fillAlumnos.nacionalidad = alumno.nacionalidad;
						this.fillAlumnos.direccion = alumno.direccion;
						this.fillAlumnos.barrio = alumno.barrio;
						this.fillAlumnos.departamento = alumno.departamento;
						this.fillAlumnos.asignacion_universal = alumno.asignacion_universal;
						this.fillAlumnos.salario_familiar = alumno.salario_familiar;
						this.fillAlumnos.pueblo_originario = alumno.pueblo_originario;
						this.fillAlumnos.programa_cai = alumno.programa_cai;
						this.fillAlumnos.discapacidad = alumno.discapacidad;
						this.fillAlumnos.diabetes = alumno.diabetes;
						this.fillAlumnos.hernias = alumno.hernias;
						this.fillAlumnos.convulsiones = alumno.convulsiones;
						this.fillAlumnos.problemas_respiratorios = alumno.problemas_respiratorios;
						this.fillAlumnos.problemas_cardiacos = alumno.problemas_cardiacos;
						this.fillAlumnos.alergias = alumno.alergias;
						this.fillAlumnos.esguinces = alumno.esguinces;
						this.fillAlumnos.enfermedades_infectocontagiosas = alumno.enfermedades_infectocontagiosas;
						this.fillAlumnos.incapacidad = alumno.incapacidad;
						this.fillAlumnos.otros = alumno.otros;
						this.fillAlumnos.certificado_salud = alumno.certificado_salud;
						this.fillAlumnos.certificado_dental = alumno.certificado_dental;
						this.fillAlumnos.carnet_vacuna = alumno.carnet_vacuna;
						this.fillAlumnos.grupo_sanguineo = alumno.grupo_sanguineo;
						this.fillAlumnos.certificado_nivel_inicial = alumno.certificado_nivel_inicial;
						this.fillAlumnos.fotocopia_dni = alumno.fotocopia_dni;
						this.fillAlumnos.contribucion_cooperadora = alumno.contribucion_cooperadora;
						return this.fillAlumnos;
					},
					updateAlumno: function(id) {
						var edit_nacimiento = document.getElementById('edit_nacimiento').value;
						var edit_departamento = document.getElementById('edit_departamento').value;
						this.fillAlumnos.fecha_nacimiento = edit_nacimiento;
						this.fillAlumnos.departamento = edit_departamento;
						axios.put('alumnos/'+id, this.fillAlumnos).then(response => {
							this.change(1);
							this.getAlumnos();
							M.toast({html: 'Datos Actualizados', classes: 'green'})
							this.fillAlumnos={
								id: '',
								cuil: '',
								apellido: '',
								nombre: '',
								fecha_nacimiento: '',
								lugar_nacimiento: '',
								nacionalidad: '',
								direccion: '',
								barrio: '',
								departamento: '',
								asignacion_universal: '',
								salario_familiar: '',
								pueblo_originario: '',
								programa_cai: '',
								discapacidad: '',
								diabetes: '',
								hernias: '',
								convulsiones: '',
								problemas_respiratorios: '',
								problemas_cardiacos: '',
								alergias: '',
								esguinces: '',
								enfermedades_infectocontagiosas: '',
								incapacidad: '',
								otros: '',
								certificado_salud: '',
								certificado_dental: '',
								carnet_vacuna: '',
								grupo_sanguineo: '',
								certificado_nivel_inicial: '',
								fotocopia_dni: '',
								contribucion_cooperadora: ''
							};
						}).catch(error => {
							this.change(1);
							this.getAlumnos();
							M.toast({html: 'X Error', classes: 'red'})
							console.log(error.response.data)
						});
					},
					changePage: function(page){
						this.pagination.current_page = page;
						this.getAlumnos(page);
					}

				}

			});
	</script>

@endsection