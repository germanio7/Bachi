@extends('home')

@section('contenido')

	<div class="row" id="crud_cursos">
		<div class=" margin">
			
			<div class="fixed-action-btn" id="boton">
		  		<a class="btn-floating btn-large green waves-effect waves-light modal-trigger" href="#create"><i class="fas fa-plus fa-lg"></i></a>
			</div>

				<blockquote><h1>Cursos</h1></blockquote>

				<table class="striped">
					<thead>
						<tr>
							<th>Curso</th>
							<th>Orientación</th>
							<th>Turno</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="curso in cursos">
							<td>@{{curso.curso}}</td>
							<td>@{{curso.orientacion}}</td>
							<td>@{{curso.turno}}</td>
							<td>
								<div class="btn-group" role="group">
						      <a class="btn blue"><i class="fas fa-print fa-lg"></i></a>
						      <a class="btn green"><i class="fas fa-pen fa-lg"></i></a>
									<a class="btn red darken-4" v-on:click.prevent="deleteCurso(curso)"><i class="fas fa-trash fa-lg"></i></a>
						    </div>
							</td>
						</tr>
					</tbody>
				</table>

			<div>
				@include('cursos.create')
			</div>

		</div>
	</div>

	{{-- <script>
		function change(){
			var boton = document.getElementById('boton');
			var index = document.getElementById('index');
			var crear =document.getElementById('crear');
			if (point == 1) {
				crear.style.display = 'none';
				index.style.display = 'block';
				boton.innerHTML = '<a class="btn-floating btn-large green waves-effect waves-light" onclick="change(2);"><i class="fas fa-plus fa-lg"></i></a>';
			}else if (point == 2) {
				crear.style.display = 'block';
				index.style.display = 'none';
				boton.innerHTML = '<a class="btn-floating btn-large blue waves-effect waves-light" onclick="change(1);"><i class="fas fa-arrow-left fa-lg"></i></a>';
			}
		}
	</script> --}}



		{{-- <div class="fixed-action-btn">
  	<a href="{{route('cursos.create')}}" class="btn-floating btn-large green"><i class="fas fa-plus fa-lg"></i></a>
	</div>

	<blockquote><h1>Cursos</h1></blockquote>

	<table class="striped">
		<thead>
			<tr>
				<th>Curso</th>
				<th>Orientacion</th>
				<th>Turno</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($cursos as $curso)	
			<tr>
				<td>{{$curso->curso}}</td>
				<td>{{$curso->orientacion}}</td>
				<td>{{$curso->turno}}</td>
				<td></td>
				<td>
					<div class="btn-group" role="group">
			        <a class="btn blue" href="{{route('cursos.show',$curso->id)}}"><i class="fas fa-eye fa-lg"></i></a>
			        <a class="btn green" href="{{route('cursos.edit',$curso->id)}}"><i class="fas fa-pen fa-lg"></i></a>
			      	
			      	{!!Form::open(['route'=>['cursos.destroy',$curso->id],'method'=>'DELETE'])!!}
						<button class="btn red darken-4"><i class="fas fa-trash fa-lg"></i></button>
				  {!!Form::close()!!}
			    </div>
				</td>
			@endforeach
		</tbody>
	</table> --}}

@endsection