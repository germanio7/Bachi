@extends('home')

@section('contenido')

	<blockquote class="blockquote text-center"><h1>Lista Notas</h1></blockquote>

	<div class="card-panel hoverable green lighten-4">

	<table class="highlight">
		<thead>
			<tr>
				<th>ID</th>
				<th>Alumno</th>
				<th>Materia</th>
				<th>Primer Trimestre</th>
				<th>Segundo Trimestre</th>
				<th>Tercer Trimestre</th>
				<th>Integral</th>
				<th>Diciembre</th>
				<th>Marzo</th>
				<th>Final</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($notas as $nota)
				<tr>
					<td>{{$nota->id}}</td>
					@foreach($nota->alumnos as $alumno)
						<td>{{$alumno->apellido}} {{$alumno->nombre}}</td>
					@endforeach
					@foreach($nota->materias as $materia)
						<td>{{$materia->nombre}}</td>
					@endforeach
					<td>{{$nota->primer_trimestre}}</td>
					<td>{{$nota->segundo_trimestre}}</td>
					<td>{{$nota->tercer_trimestre}}</td>
					<td>{{$nota->integral}}</td>
					<td>{{$nota->diciembre}}</td>
					<td>{{$nota->marzo}}</td>
					<td>{{$nota->final}}</td>
					<td>
					<div class="btn-group btn-group-justified">
						<a href="" class="btn green darken-4">Ver más</a>
					</div>
				</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	</div>

@endsection