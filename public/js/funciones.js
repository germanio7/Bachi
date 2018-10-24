function desplegar(id){

	var cursos = document.getElementById("tabss" + id);	
	var bars = document.getElementById("bars" + id);
	var times = document.getElementById("times" + id);

		if (cursos.style.display == "none") {
			cursos.style.display = "inline";
			times.style.display = "inline";
			bars.style.display = "none";
		}else if (cursos.style.display == "inline") {
			cursos.style.display = "none";
			times.style.display = "none";
			bars.style.display = "inline";
		}
	
}

function soltar(idanterior){

	var cursos = document.getElementById("tabss" + idanterior);	
	var bars = document.getElementById("bars" + idanterior);
	var times = document.getElementById("times" + idanterior);

	cursos.style.display = "none";
	times.style.display = "none";
	bars.style.display = "inline";
	
}



