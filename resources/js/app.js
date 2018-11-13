// //CRUD Alumnos

	new Vue({

		el: '#crud_alumno',

		created: function() {
			this.getAlumnos();
			console.log('cambios');
		},

		data: {
			alumnos: [],
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
			newDiabetes: 0,
			newHernias: 0,
			newConvulsiones: 0,
			newProblemasRespiratorios: 0,
			newProblemasCardiacos: 0,
			newAlergias: 0,
			newEsguiences: 0,
			newEnfermedadesInfectocontagiosas: 0,
			newIncapacidad: 0,
			newOtros: ''
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
					diabetes: this.newDiabetes,
					hernias: this.newHernias,
					convulsiones: this.newConvulsiones,
					problemas_respiratorios: this.newProblemasRespiratorios,
					problemas_cardiacos: this.newProblemasCardiacos,
					alergias: this.newAlergias,
					esguinces: this.newEsguiences,
					enfermedades_infectocontagiosas: this.newEnfermedadesInfectocontagiosas,
					incapacidad: this.newIncapacidad,
					otros: this.newOtros
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