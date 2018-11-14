// //CRUD Alumnos

	new Vue({

		el: '#crud_alumno',

		created: function() {
			this.getAlumnos();
		},

		data: {
			alumnos: [],
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
			newContribucionCooperadora: 0
		},

		methods: {
			getAlumnos: function() {
				var urlAlumnos = 'alumnos';
				axios.get(urlAlumnos).then(response => {
					this.alumnos = response.data
				});
			},
			change: function(point) {
				console.log('function');
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
					M.toast({html: 'Alumno Registrado', classes: 'green'})
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
				this.fillAlumnos.id = alumno.id;
				this.fillAlumnos.cuil = alumno.cuil;
				this.fillAlumnos.apellido = alumno.apellido;
				this.fillAlumnos.nombre = alumno.nombre;
				this.fillAlumnos.fecha_nacimiento = alumno.fecha_nacimiento;
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
			}

		}

	});

// //----------------------------------------------------

//CRUD Materias

	new Vue({

		el: '#crud_materias',

		created: function() {
			this.getMaterias();
			this.getDocentes();
		},

		data: {
			materias: [],
			docentes: [],
			newNombre: '',
			newDocenteId: ''
		},

		methods: {
			getMaterias: function() {
				var urlMaterias = 'materias';
				axios.get(urlMaterias).then(response => {
					this.materias = response.data;
				});
			},
			getDocentes: function() {
				var urlDocentes = 'docentes';
				axios.get(urlDocentes).then(response => {
				this.docentes = response.data;
				});
			},
			deleteMateria: function(materia) {
				var id = materia.id;
				axios.delete('materias/' + id).then(response => {
					this.getMaterias();
					M.toast({html: 'Materia Eliminada'})
				});
			},
			createMateria: function(){
				var url = 'materias';
				axios.post(url, {
					nombre: this.newNombre,
					docente_id: this.newDocenteId
				}).then(response => {
					this.getMaterias();
					this.newNombre = '';
				}).catch(error => {
					console.log(error.response.data)
				});
			}
		}

	});


//----------------------------------------------------

//CRUD Cursos
	new Vue({
		el: '#crud_cursos',

		created: function() {
			this.getCursos();
		},

		data: {
			cursos: [],
			fillCurso: {
				id: '',
				curso: '',
				division: '',
				orientacion: '',
				turno: ''
			},
			newCurso: '',
			newDivision: '',
			newOrientacion: '',
			newTurno: ''
		},

		methods: {
			getCursos: function() {
				var urlCursos = 'cursos';
				axios.get(urlCursos).then(response => {
					this.cursos = response.data;
				});
			},

			createCursos: function() {
				var url = 'cursos';
				axios.post(url, {
					curso: this.newCurso,
					division: this.newDivision,
					orientacion: this.newOrientacion,
					turno: this.newTurno
				}).then(response => {
					this.getCursos();
					this.newCurso = '';
					this.newDivision = '';
					this.newOrientacion = '';
					this.newTurno = '';
				}).catch(error => {
					console.log(error.response.data)
				});
			},

			updateCurso: function(id) {
				axios.put('cursos/'+id, this.fillCurso).then(response => {
					this.getCursos();
					this.fillCurso={
						id: '',
						curso: '',
						division: '',
						orientacion: '',
						turno: ''
					};
				}).catch(error => {
					console.log(error.response.data)
				});
			},

			deleteCurso: function(curso) {
				var id = curso.id;
				axios.delete('cursos/' + id).then(response => {
					this.getCursos();
					M.toast({html: 'Curso Eliminado'})
				});
			},

			editCurso : function(curso) {
				this.fillCurso.id = curso.id;
				this.fillCurso.curso = curso.curso;
				this.fillCurso.division = curso.division;
				this.fillCurso.orientacion = curso.orientacion;
				this.fillCurso.turno = curso.turno;
				return this.fillCurso;
			}
		}
	});

	// //----------------------------------------------------

//CRUD Docentes

	new Vue({

		el: '#crud_docentes',

		created: function() {
			this.getDocentes();
		},

		data: {
			
			docentes: [],
			newCuil: '',
			newApellido: '',
			newNombre: '',
			newMatricula: '',
			newTitulo: '',
			newDireccion: '',
			newTelefono: '',
			newEmail: ''
		},

		methods: {

			getDocentes: function() {
				var urlDocentes = 'docentes';
				axios.get(urlDocentes).then(response => {
				this.docentes = response.data;
				});
			},
			deleteDocente: function(docente) {
				var id = docente.id;
				axios.delete('docentes/' + id).then(response => {
					this.getMaterias();
					M.toast({html: 'Docente Eliminado'})
				});
			},
			createDocente: function(){
				var url = 'docentes';
				axios.post(url, {
					cuil: this.newCuil,
					apellido: this.newApellido,
					nombre: this.newNombre,
					matricula: this.newMatricula,
					titulo: this.newTitulo,
					direccion: this.newDireccion,
					telefono: this.newTelefono,
					email: this.newEmail
				}).then(response => {
					this.getDocentes();
					this.newCuil = '';
					this.newApellido = '';
					this.newNombre = '';
					this.newMatricula = '';
					this.newTitulo = '';
					this.newDireccion = '';
					this.newTelefono = '';
					this.newEmail = '';
				}).catch(error => {
					console.log(error.response.data)
				});
			}
		}

	});