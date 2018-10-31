@extends('home')

@section('contenido')

	<div class="fixed-action-btn">
  	<a href="{{route('alumnos.create')}}" class="btn-floating btn-large green"><i class="fas fa-plus fa-lg"></i></a>
	</div>

	<blockquote><h1>Alumnos</h1></blockquote>

	<table class="striped">
		<thead>
			<tr>
				<th>Cuil</th>
				<th>Apellido</th>
				<th>Nombre</th>
				<th>Asistencia</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($alumnos as $alumno)	
			<tr>
				<td>{{$alumno->cuil}}</td>
				<td>{{$alumno->apellido}}</td>
				<td>{{$alumno->nombre}}</td>
				<td></td>
				<td>
					<div class="btn-group" role="group">

			        <a class="btn blue" href="#"><i class="fas fa-print fa-lg"></i></a>
			        <a class="btn green" href="#"><i class="fas fa-pen fa-lg"></i></a>
			        {!!Form::open(['route'=>['alumnos.destroy',$alumno->id],'method'=>'DELETE'])!!}
							<button class="btn red"><i class="fas fa-trash fa-lg"></i></button>
						{!!Form::close()!!}		      
			    </div>
				</td>
			@endforeach
		</tbody>
	</table>

@endsection