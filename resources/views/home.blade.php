<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>E.E.S Nº. 9 "Maestro Sarmiento"</title>
	<link rel="stylesheet" href="{{'/materialize/css/materialize.css'}}">
	<link rel="stylesheet" href="{{'/materialize/css/style.css'}}">
	<link rel="stylesheet" href="{{'/fontawesome/css/all.css'}}">
</head>
<body>
<<<<<<< HEAD
    <div class="navbar-fixed">
		<nav>
		    <div class="nav-wrapper pink darken-1">
		      <a href="/"><img class="circle" style="max-height:64px;" src="../img/logo.jpg" alt=""><class="brand-logo"></a>
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		        <li><a href="{{route('alumnos.index')}}">Alumnos</a></li>
		        <li><a href="{{route('padres.index')}}">Padres</a></li>
		        <li><a href="{{route('cursos.index')}}">Cursos</a></li>
		        <li><a href="{{route('materias.index')}}">Materias</a></li>
		        <li><a href="{{route('docentes.index')}}">Docentes</a></li>
		      </ul>
		    </div>
		  </nav>
    </div>

    <div class="container">
		  @yield('contenido')
    </div>
    

    <footer class="page-footer pink darken-1">
      <div class="footer-copyright">
        <div class="footer-fixed">
        © 2018 Copyright Controller Group
      </div>
        </div>
    </footer>

	<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script>
    	M.AutoInit();
    </script>
=======
>>>>>>> 0e738aea7de4beefff13bd9d602ecf42d2fc3bb9

	<div>
		@yield('contenido')
	</div>
	
	<script src="{{'/materialize/js/materialize.js'}}"></script>
	<script src="{{'/fontawesome/js/all.js'}}"></script>
	<script>
		M.AutoInit();
	</script>
</body>
</html>