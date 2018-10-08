@extends('home')

@section('contenido')

	<blockquote class="blockquote text-center"><h1>Lista Asistencias</h1></blockquote>

	<div class="card-panel hoverable green lighten-4">

	<table class="highlight">
		<thead>
			<tr>
				<th>ID</th>
				<th>Alumno</th>
				<th>Fecha</th>
				<th>Asistencia</th>
				<th>Comentario</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($asistencias as $asistencia)
			@foreach($asistencia->alumnos as $alum)
			<tr>
				<td>{{$asistencia->id}}</td>
				<td>{{$alum->apellido}} {{$alum->nombre}}</td>
				@endforeach
				<td>{{$asistencia->fecha}}</td>
				@if($asistencia->asistencia='0')
					<td>Ausente</td>
				@elseif($asistencia->asistencia='1')
					<td>Presente</td>
				@elseif($asistencia->asistencia='0.5')
					<td>Tardanza</td>	
				@endif
				<td>{{$asistencia->comentario}}</td>
				<td>
					<div class="btn-group btn-group-justified">
						<a href="{{-- {{route('materias.show',$materia->id)}} --}}" class="btn green darken-4">Ver más</a>
					</div>

				</td>
			</tr>
			
			@endforeach
		</tbody>
	</table>

	</div>

@endsection