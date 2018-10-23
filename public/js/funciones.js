function hola(id){

	console.log(id);
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
	
	console.log(bars);
	
}



