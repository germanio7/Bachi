@extends('home')

@section('contenido')


	<blockquote><h1>Nuevo Alumno</h1></blockquote>


		{!! Form::open(['action' => 'AlumnosController@store','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}

			<div class="col s12">	
				<div class="card">
	    		<div class="card-content">
	      		<img src="{{'/img/ministerio.png'}}" width="300" height="auto">
	      		<br>
	      		<h5 class="center-align">PLANILLA ANEXA I - RESOLUCION Nº 9858</h5>
	    		</div>
	    		<div class="card-tabs">
	      		<ul class="tabs tabs-fixed-width">
			        <li class="tab"><a href="#alumno"><b>Datos del Alumno</b></a></li>
			        <li class="tab"><a href="#test5">Test 2</a></li>
			        <li class="tab"><a href="#test6">Test 3</a></li>
	      		</ul>
	    		</div>
	    		<div class="card-content grey lighten-5">
			      <div id="alumno" class="container">

			      	<div class="row">
			      		<p class="green-text light-text-darken-2">Repitente:</p>
								<div class="switch">
							    <label>
							      NO
							      <input type="checkbox">
							      <span class="lever"></span>
							      SI
							    </label>
							  </div>
			      	</div>

			      	<div class="row">
        				<div class="input-field col s4">
          				<input id="grado" type="text" class="validate">
          				<label for="grado">Grado</label>
        				</div>
        				<div class="input-field col s4">
          				<input id="seccion" type="text" class="validate">
          				<label for="seccion">Sección</label>
        				</div>
        				<div class="input-field col s4">
          				<input id="turno" type="text" class="validate">
          				<label for="turno">Turno</label>
        				</div>
      				</div>

							<div class="row">
								<div class="input-field col s6">
          				<input id="cuil" type="text" class="validate">
          				<label for="cuil">CUIL Nº</label>
        				</div>
							</div>

							<div class="row">
								<div class="input-field col s12">
          				<input id="apellido" type="text" class="validate">
          				<label for="apellido">Apellidos</label>
        				</div>
							</div>

							<div class="row">
								<div class="input-field col s12">
          				<input id="nombre" type="text" class="validate">
          				<label for="nombre">Nombres</label>
        				</div>
							</div>

							<div class="row">
								<div class="input-field col s4">
          				<input id="nacimiento" type="text" class="datepicker">
          				<label for="nacimiento">Fecha de Nacimiento</label>
        				</div>
        				<div class="input-field col s4">
          				<input id="lugar" type="text" class="validate">
          				<label for="lugar">Lugar</label>
        				</div>
        				<div class="input-field col s4">
          				<input id="nacionalidad" type="text" class="validate">
          				<label for="nacionalidad">Nacionalidad</label>
        				</div>
							</div>

							<div class="row">
								<div class="switch col s4">
									<p class="green-text light-text-darken-2">Asignación Familiar:</p>
							    <label>
							      NO
							      <input type="checkbox">
							      <span class="lever"></span>
							      SI
							    </label>
							  </div>
								<div class="switch col s4">
									<p class="green-text light-text-darken-2">Salario Familiar:</p>
							    <label>
							      NO
							      <input type="checkbox">
							      <span class="lever"></span>
							      SI
							    </label>
							  </div>
								<div class="switch col s4">
									<p class="green-text light-text-darken-2">Pertenece a Pueblo Originario:</p>
							    <label>
							      NO
							      <input type="checkbox">
							      <span class="lever"></span>
							      SI
							    </label>
							  </div>
			      	</div>

			      	<div class="divider"></div>

			      	<div class="row">
			      		<div class="col s12 offset-s2">
									<div class="switch col s4">
										<p class="green-text light-text-darken-2">Programa CAI:</p>
								    <label>
								      NO
								      <input type="checkbox">
								      <span class="lever"></span>
								      SI
								    </label>
								  </div>
									<div class="switch col s4">
										<p class="green-text light-text-darken-2">Discapacidad:</p>
								    <label>
								      NO
								      <input type="checkbox">
								      <span class="lever"></span>
								      SI
								    </label>
								  </div>
								</div>
			      	</div>
			      	
			      </div>
			      <div id="test5">Test 2</div>
			      <div id="test6">Test 3</div>
	    		</div>
	  		</div>
	  	</div>

		{{ Form::submit('Guardar',(['class'=>'btn green'])) }}
    	
		{!! Form::close() !!}

@endsection