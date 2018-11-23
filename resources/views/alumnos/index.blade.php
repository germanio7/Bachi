@extends('home')

@section('contenido')

<div id="app">

	<div id="boton">
		<div class="fixed-action-btn">
			<a onclick="chage(create);" class="btn-floating btn-large waves-effect waves-light green"><i class="fas fa-plus fa-lg"></i></a>
		</div>
	</div>

	<div id="index" style="display: block;">
		<div class="margin">
			<blockquote><h1>Alumnos</h1></blockquote>
			<alumnos-index></alumnos-index>	
		</div>
	</div>
	<div id="create" style="display: none;">
		<alumnos-create></alumnos-create>
	</div>
	<div id="edit" style="display: none;">
		<alumnos-edit></alumnos-edit>
	</div>
	
</div>

<script>
	function chage(point){
		var index = document.getElementById('index');
		var create = document.getElementById('create');
		var boton = document.getElementById('boton');
		if (point == index) {
			index.style.display = 'block';
			create.style.display = 'none';
			boton.innerHTML = '<div class="fixed-action-btn"><a onclick="chage(create);" class="btn-floating btn-large waves-effect waves-light green"><i class="fas fa-plus fa-lg"></i></a></div>'
		} else if (point == create) {
			index.style.display = 'none';
			create.style.display = 'block';
			boton.innerHTML = '<div class="fixed-action-btn"><a onclick="chage(index);" class="btn-floating btn-large waves-effect waves-light blue"><i class="fas fa-arrow-left fa-lg"></i></i></a></div>'
		}	
	}
</script>

@endsection