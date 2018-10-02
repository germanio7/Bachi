<?php

	$cuil = $_GET['cuil'];

	$con = new mysqli("localhost","root","","bachi");

	$a = $con->query("SELECT * FROM alumnos WHERE cuil='$cuil'");

	foreach ($a as $alumno) {
		$arreglo[] = $alumno;
	}

	echo json_encode($arreglo);

 ?>