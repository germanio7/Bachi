// //CRUD Alumnos

	new Vue({

		el: '#crud_alumno',

		created: function() {
			this.getAlumnos();
		},

		data: {
			alumnos: [],
			filalumnos: {
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
			newMadrePadre: 0,
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
			deleteAlumno: function(alumno) {
				var id = alumno.id;
				axios.delete('alumnos/' + id).then(response => {
					this.getAlumnos();
					M.toast({html: 'Alumno Eliminado'})
				});
			},
			createAlumno: function(){
				var url = 'alumnos';
				var nacimiento = document.getElementById('nacimiento').value;
				this.newFechaNacimiento = nacimiento;
				var fecha_nacimiento_tutor = document.getElementById('fecha_nacimiento_tutor').value;
				this.newFechaNacimientoTutor = fecha_nacimiento_tutor;
				axios.post(url, {
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
					madre_padre: this.newMadrePadre,
					cuil_tutor: this.newCuilTutor,
					apellido_tutor: this.newApellidoTutor,
					nombre_tutor: this.newNombreTutor,
					fecha_nacimiento_tutor: this.newFechaNacimientoTutor,
					lugar_nacimiento_tutor: this.newLugarNacimientoTutor,
					nacionalidad_tutor: this.newNacionalidadTutor,
					direccion_tutor: this.newDireccionTutor,
					telefono_tutor: this.newTelefonoTutor,
					barrio_tutor: this.newBarrioTutor,
					a_cargo: this.newACargo,
					es_tutor: this.newEsTutor,
					patria_potestad: this.newPatriaPotestad,
					vive_con_alumno: this.newViveConAlumno,
					ocupacion: this.newOcupacion,
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
					contribucion_cooperadora: this.newContribucionCooperadora
				}).then(response => {
					this.getAlumnos();
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

				});
			},
			editAlumno: function(alumno) {
				this.filalumnos.id = alumno.id;
				this.filalumnos.cuil = alumno.cuil;
				this.filalumnos.apellido = alumno.apellido;
				this.filalumnos.nombre = alumno.nombre;
				this.filalumnos.fecha_nacimiento = alumno.fecha_nacimiento;
				this.filalumnos.lugar_nacimiento = alumno.lugar_nacimiento;
				this.filalumnos.nacionalidad = alumno.nacionalidad;
				this.filalumnos.direccion = alumno.direccion;
				this.filalumnos.barrio = alumno.barrio;
				this.filalumnos.departamento = alumno.departamento;
				this.filalumnos.asignacion_universal = alumno.asignacion_universal;
				this.filalumnos.salario_familiar = alumno.salario_familiar;
				this.filalumnos.pueblo_originario = alumno.pueblo_originario;
				this.filalumnos.programa_cai = alumno.programa_cai;
				this.filalumnos.discapacidad = alumno.discapacidad;
				this.filalumnos.diabetes = alumno.diabetes;
				this.filalumnos.hernias = alumno.hernias;
				this.filalumnos.convulsiones = alumno.convulsiones;
				this.filalumnos.problemas_respiratorios = alumno.problemas_respiratorios;
				this.filalumnos.problemas_cardiacos = alumno.problemas_cardiacos;
				this.filalumnos.alergias = alumno.alergias;
				this.filalumnos.esguinces = alumno.esguinces;
				this.filalumnos.enfermedades_infectocontagiosas = alumno.enfermedades_infectocontagiosas;
				this.filalumnos.incapacidad = alumno.incapacidad;
				this.filalumnos.otros = alumno.otros;
				this.filalumnos.certificado_salud = alumno.certificado_salud;
				this.filalumnos.certificado_dental = alumno.certificado_dental;
				this.filalumnos.carnet_vacuna = alumno.carnet_vacuna;
				this.filalumnos.grupo_sanguineo = alumno.grupo_sanguineo;
				this.filalumnos.certificado_nivel_inicial = alumno.certificado_nivel_inicial;
				this.filalumnos.fotocopia_dni = alumno.fotocopia_dni;
				this.filalumnos.contribucion_cooperadora = alumno.contribucion_cooperadora;
				return this.filalumnos;
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
			newCurso: '',
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
					orientacion: this.newOrientacion,
					turno: this.newTurno
				}).then(response => {
					this.getCursos();
					this.newCurso = '';
					this.newOrientacion = '';
					this.newTurno = '';
				}).catch(error => {
					console.log(error.response.data)
				});
			}
		}
	});