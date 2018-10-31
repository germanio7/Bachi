@extends('home')

@section('contenido')

		<div class="fixed-action-btn">
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
<<<<<<< HEAD
					<div class="btn-group btn-group-justified">
						<a href="{{route('cursos.show',$curso->id)}}" class="btn green darken-4">Ver más</a>

						{!!Form::open(['route'=>['cursos.destroy',$curso->id],'method'=>'DELETE'])!!}
							<button class="btn red darken-4">Eliminar</button>
						{!!Form::close()!!}
					</div>
=======
					<div class="btn-group" role="group">
			        <a class="btn blue" href="{{route('cursos.show',$curso->id)}}"><i class="fas fa-eye fa-lg"></i></a>
			        <a class="btn green" href="#"><i class="fas fa-pen fa-lg"></i></a>
			      	<a class="btn red" href="#"><i class="fas fa-trash fa-lg"></i></a>
			    </div>
>>>>>>> ab55377f8587f867f8d6fdcb437585c01c99176e
				</td>
			@endforeach
		</tbody>
	</table>

@endsection