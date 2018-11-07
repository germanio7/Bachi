<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>E.E.S Nº. 9 "Maestro Sarmiento"</title>
	<style>

		body {
			font-family: Arial, Helvetica, sans-serif;
		}
		.center-text {
			text-align: center;
		}
		table {
    	border-collapse: collapse;
   	 	width: 690px;
		}

		table, td, th {
		    border: 1px solid black;
		    padding-left: 15px;
		}

		.container {
			margin-left: 25px;
		}
		
		img {
			position: absolute;
    	top: -40px;
    	left: 30px;
    	z-index: -1;
		}

	</style>
</head>
<body>

		<img src="../public/img/ministerio.png" width="200" height="auto">
       
		<div class="center-text">
				<h2>PLANILLA ANIXA I - RESOLUCION Nº 9558</h2>
		</div>

		<div>
      	<p class="center-text">
      		<b>Nivel :</b> Secundario |    
					<b>Establecimiento: </b>9 |    
					<b>Categoria: </b>.... |
					<b>Zona Sup: </b>.... |
					<b>Reg Educativa: </b>3
				</p>     
    </div>


		<div class="container">

			<div id="curso">
		    <table>
		    	<tbody>
		    		<tr>
		    			<td>
		    				<p>
		    					<b>Grado: </b>......
		    					<b>Sección: </b>......
		    					<b>Turno: </b>......
		    				</p>
		    				<p>
		    					<b>Ingreso de otro establecimiento: </b>......
		    				</p>
		    				<p>
		    					<b>Con Pase: </b>......
		    				</p>
		    				<p>
		    					<b>Fecha: </b>......
		    				</p>
		    			</td>
		    			<td>
		    				<p>
		    					<b>Grado: </b>......
		    					<b>Sección: </b>......
		    					<b>Turno: </b>......
		    				</p>
		    				<p>
		    					<b>Ingreso de otro establecimiento: </b>......
		    				</p>
		    				<p>
		    					<b>Con Pase: </b>......
		    				</p>
		    				<p>
		    					<b>Fecha: </b>......
		    				</p>
		    			</td>
		    		</tr>
		    	</tbody>
		    </table>
	    </div>
			<br>
	    <div id="alumno">
	    	<table>
	    		<tbody>
	    			<tr>
		    			<td>
		    				<h2><b>Datos del Alumno: </b></h2>
								<p>
									<b>Repitente: </b>@if($alumno->repitente==1) SI @else NO @endif
									<b>Grado: </b>
									<b>Sección: </b>
									<b>Turno: </b>
								</p>
								<p>
									<b>DNI Nº: </b>{{$alumno->cuil}}
								</p>
								<p>
									<b>Apellidos y Nombres: </b>{{$alumno->apellido}} {{$alumno->nombre}}
								</p>
								<p>
									<b>Fecha de Nacimiento: </b>{{$alumno->fecha_nacimiento}} 
									<b>Lugar: </b>{{$alumno->lugar_nacimiento}} 
									<b>Nacionalidad: </b>{{$alumno->nacionalidad}} 
								</p>
								<p>
									<b>Domicilio (Calle y Nº): </b>{{$alumno->direccion}}
								</p>
								<p>
									<b>Barrio: </b>{{$alumno->barrio}}
									<b>Departamento: </b>{{$alumno->departamento}}
								</p>
								<p>
									<b>CUIL Nº: </b>{{$alumno->cuil}}
								</p>
								<p>
									<b>Asignación Familiar: </b>@if($alumno->asignacion_universal==1) SI @else NO @endif
									<b>Salario Familiar: </b>@if($alumno->salario_familiar==1) SI @else NO @endif
									<b>Pertenece a Pueblo Originario: </b>@if($alumno->pueblo_originario==1) SI @else NO @endif
								</p>
								<p>
									<b>Programa CAI: </b>@if($alumno->programa_cai==1) SI @else NO @endif
									<b>&nbsp;&nbsp;&nbsp;&nbsp;Discapacidad: </b>@if($alumno->discapacidad==1) SI @else NO @endif
								</p>
								<p>
									<b>Tipo de Discapacidad :</b>..........................................................................................................
								</p>
								<p>
									<b>Con seguimiento docente: Sector Estatal: </b>........................................................................
								</p>
								<p>
									<b>Sector Privado: </b>.......................................................................
								</p>
								<p>
									<b>Sin seguimiento docente: </b>....................................................................................................
								</p>
		    			</td>
		    		</tr>
	    		</tbody>
	    	</table>
	    </div>
	    <div id="tutor">
	    	@foreach($tutor as $t)
	    	<table>
	    		<tbody>
	    			<tr>
		    			<td>
		    				<h2><b>Datos del Tutor: </b></h2>
								<p>
									<b>@if($t->madre_padre == 1) Padre @else Madre @endif</b>
								</p>
								<p>
									<b>DNI Nº: </b>{{$t->cuil}}
								</p>
								<p>
									<b>Apellidos y Nombres: </b>{{$t->apellido}} {{$t->nombre}}
								</p>
								<p>
									<b>Fecha de Nacimiento: </b>{{$t->fecha_nacimiento}}
									<b>Lugar: </b>{{$t->lugar_nacimiento}}
									<b>Nacionalidad: </b>{{$t->nacionalidad}}
								</p>
								<p>
									<b>Domicilio (Calle y Nº): </b>{{$t->direccion}}
									<b>TEL/CEL :</b>{{$t->telefono}}
								</p>
								<p>
									<b>Barrio: </b>{{$t->barrio}}
									<b>Departamento: </b>{{$t->departamento}}
								</p>
								<p>
									<b>CUIL Nº: </b>{{$t->cuil}}
								</p>
								<p>
									<b>A Cargo: </b>
									<b>Es Tutor: </b>
									<b>Patria Potestad: </b>
									<b>Vive con el Alumno: </b>
								</p>
								<p>
									<b>Ocupación: </b>{{$t->ocupacion}}
								</p>
		    			</td>
		    		</tr>
	    		</tbody>
	    	</table>
	    	@endforeach
	    </div>

			<div class="center-text">
				<h2>PLANILLA ANIXA I - RESOLUCION Nº 9558</h2>
			</div>
			<br>

	    <div id="enfermedades">
	    	<table>
	    		<thead>
	    			<tr>
	    				<th>Padece de las siguientes enfermedades: indicar con una cruz</th>
	    				<th class="center-text" style="padding-right: 15px;">SI</th>
	    				<th class="center-text" style="padding-right: 15px;">NO</th>
	    			</tr>
	    		</thead>
	    		<tbody>
	    			<tr>
	    				<td>Diabetes</td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->diabetes==1) X @endif </td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->diabetes==0) X @endif </td>
	    			</tr>
	    			<tr>
	    				<td>Hernias;</td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->hernias==1) X @endif </td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->hernias==0) X @endif </td>
	    			</tr>
	    			<tr>
	    				<td>Convulsiones</td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->convulsiones==1) X @endif </td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->convulsiones==0) X @endif</td>
	    			</tr>
	    			<tr>
	    				<td>Problemas Respiratorios</td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->problemas_respiratorios==1) X @endif </td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->problemas_respiratorios==0) X @endif </td>
	    			</tr>
	    			<tr>
	    				<td>Problemas Cardiacos</td>
	    				<td class="center-text" style="padding-right: 15px;"> @if($alumno->problemas_cardiacos==1) X @endif </td>
	    				<td class="center-text" style="padding-right: 15px;"> @if($alumno->problemas_cardiacos==0) X @endif </td>
	    			</tr>
	    			<tr>
	    				<td>Es alérgico (a que) consignar</td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->alergias==1) X @endif </td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->alergias==0) X @endif </td>
	    			</tr>
	    			<tr>
	    				<td>En los ultimos 60 días ha padecido: Luxaciones - Esguínces <br>(torceduras de tobillos, hombros, muñecas, etc.)</td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->esguinces==1) X @endif </td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->esguinces==0) X @endif </td>
	    			</tr>
	    			<tr>
	    				<td>Enfermedades Infectocontagiosas: (paperas, sarampión, varicela, etc)</td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->enfermedades_infectocontagiosas==1) X @endif </td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->enfermedades_infectocontagiosas==0) X @endif </td>
	    			</tr>
	    			<tr>
	    				<td>¿Tuvo algún accidente que le dejo alguna incapacidad o inpedimento?</td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->incapacidad==1) X @endif </td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->incapacidad==0) X @endif </td>
	    			</tr>
	    		</tbody>
	    	</table>
				<br>
	    	<p class="center-text">Importante: ¿Actualmente tiene alguna enfermedad o hay otras situación en particular que quisiera informar?</p>
	    	<p class="center-text">..........................................................................................................................................................</p>
	    </div>
	    <div id="documentacion">
	    	<table>
	    		<thead>
	    			<tr>
	    				<th><b>Documentación presentada:</b></th>
	    				<th class="center-text" style="padding-right: 15px;">SI</th>
	    				<th class="center-text" style="padding-right: 15px;">NO</th>
	    			</tr>
	    		</thead>
	    		<tbody>
	    			<tr>
	    				<td>Certificado de salud</td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->certificado_salud==1) X @endif </td>
	    				<td class="center-text" style="padding-right: 15px;"> @if($alumno->certificado_salud==0) X @endif </td>
	    			</tr>
	    			<tr>
	    				<td>Certificado Buco Dental&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    				<td class="center-text" style="padding-right: 15px;"> @if($alumno->certificado_dental==1) X @endif </td>
	    				<td class="center-text" style="padding-right: 15px;"> @if($alumno->certificado_dental==0) X @endif </td>
	    			</tr>
	    			<tr>
	    				<td>Fotocopia del Carnet de Vacunación</td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->carnet_vacuna==1) X @endif </td>
	    				<td class="center-text" style="padding-right: 15px;"> @if($alumno->carnet_vacuna==0) X @endif </td>
	    			</tr>
	    			<tr>
	    				<td>Fotocopia del grupo sanguíneo</td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->grupo_sanguineo==1) X @endif </td>
	    				<td class="center-text" style="padding-right: 15px;"> @if($alumno->grupo_sanguineo==0) X @endif </td>
	    			</tr>
	    			<tr>
	    				<td>Certificado de finalización del Jardín de Infantes</td>
	    				<td class="center-text" style="padding-right: 15px;"> @if($alumno->certificado_nivel_inicial==1) X @endif </td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->certificado_nivel_inicial==0) X @endif </td>
	    			</tr>
	    			<tr>
	    				<td>Fotocopia del DNI</td>
	    				<td class="center-text" style="padding-right: 15px;"> @if($alumno->fotocopia_dni==1) X @endif </td>
	    				<td class="center-text" style="padding-right: 15px;"> @if($alumno->fotocopia_dni==0) X @endif </td>
	    			</tr>
	    			<tr>
	    				<td>Contribución a Cooperadora</td>
	    				<td class="center-text" style="padding-right: 15px;"> @if($alumno->contribucion_cooperadora==1) X @endif </td>
	    				<td class="center-text" style="padding-right: 15px;">@if($alumno->contribucion_cooperadora==0) X @endif </td>
	    			</tr>
	    		</tbody>
	    	</table>
	    </div>
			<br>
	    <div id="indumentaria">
	    	<p><b>Indumentaria Escolar: </b> Pollera - Pantalón - y Buzo de gimnasia: azul / Remera, camisa blanca. Insignia.-</p>
	    </div>
	    <br><br><br><br><br><br><br><br><br>
	    <div id="firmas">
	    	<p class="center-text">
      		<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;..............................&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>   
					<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;..............................&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>    
					<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;..............................&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
				</p> 
	    	<p class="center-text">
      		<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firma del Padre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>   
					<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firma de la Madre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>    
					<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firma del Tutor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
				</p> 
	    </div>

	  </div>

	  </div>

</body>
</html>