@extends('home')

@section('contenido')

	<div class="row" id="app">
		<div class=" margin">


				<cursos-index></cursos-index>

		</div>
	</div>

{{-- 	<script src="{{asset('/js/home.js')}}"></script>
	<script>
		new Vue({
			el: '#crud_cursos',

			created: function() {
				this.getCursos();
			},

			data: {
				cursos: [],
				materias: [],
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
	</script> --}}

@endsection