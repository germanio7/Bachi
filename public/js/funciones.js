var posicion = 1;
var alumno1 = document.getElementById('alumno');
var alumno2 = document.getElementById('alumno2');
var tutor1 = document.getElementById('tutor');
var tutor2 = document.getElementById('tutor2');
var enfermedades = document.getElementById('enfermedades');
var documentacion = document.getElementById('documentacion');
var sigue = document.getElementById('sigue');
var antes = document.getElementById('antes');
var falso = document.getElementById('falso');
var submit = document.getElementById('submit');


function siguiente(){
	if(posicion == 1)
	{
		alumno1.style.display = 'none';
		alumno2.style.display = 'block';
		antes.style.display = 'inline';
		falso.style.display = 'none';
		posicion = 2;
		return;
	}

	if(posicion == 2)
	{
		alumno2.style.display = 'none';
		tutor1.style.display = 'block';
		posicion = 3;
		return;
	}

	if(posicion == 3)
	{
		tutor1.style.display = 'none';
		tutor2.style.display = 'block';
		posicion = 4;
		return;
	}

	if(posicion == 4)
	{
		tutor2.style.display = 'none';
		enfermedades.style.display = 'block';
		posicion = 5;
		return;
	}

	if(posicion == 5)
	{
		enfermedades.style.display = 'none';
		documentacion.style.display = 'block';
		posicion = 6;
		sigue.style.display = 'none';
		submit.style.display = 'inline';
		return;
	}

}

function anterior(){
	if(posicion == 6)
	{
		documentacion.style.display = 'none';
		enfermedades.style.display = 'block';
		sigue.style.display = 'block';
		submit.style.display = 'none';
		posicion = 5;
		return;
	}

	if(posicion == 5)
	{
		enfermedades.style.display = 'none';
		tutor2.style.display = 'block';
		posicion = 4;
		return;
	}

	if(posicion == 4)
	{
		tutor2.style.display = 'none';
		tutor1.style.display = 'block';
		posicion = 3;
		return;
	}

	if(posicion == 3)
	{
		tutor1.style.display = 'none';
		alumno2.style.display = 'block';
		posicion = 2;
		return;
	}

	if(posicion == 2)
	{
		alumno2.style.display = 'none';
		alumno1.style.display = 'block';
		antes.style.display = 'none';
		falso.style.display = 'inline';
		posicion = 1;
		return;
	}

}
