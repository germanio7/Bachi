var posicion = 1;
var alumno1 = document.getElementById('alumno');
var alumno2 = document.getElementById('alumno2');
var tutor = document.getElementById('tutor');
var enfermedades = document.getElementById('enfermedades');
var documentacion = document.getElementById('documentacion');


function siguiente(){
	if(posicion == 1)
	{
		alumno1.style.display = 'none';
		alumno2.style.display = 'block';
		posicion = 2;
		return;
	}

	if(posicion == 2)
	{
		alumno2.style.display = 'none';
		tutor.style.display = 'block';
		posicion = 3;
		return;
	}

	if(posicion == 3)
	{
		tutor.style.display = 'none';
		enfermedades.style.display = 'block';
		posicion = 4;
		return;
	}

	if(posicion == 4)
	{
		enfermedades.style.display = 'none';
		documentacion.style.display = 'block';
		posicion = 5;
		return;
	}

}
