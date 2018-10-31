<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="{{'/img/icono.png'}}"/>
	<title>E.E.S Nº. 9 "Maestro Sarmiento"</title>
	<link rel="stylesheet" href="{{'/materialize/css/materialize.css'}}">
	<link rel="stylesheet" href="{{'/materialize/css/style.css'}}">
	<link rel="stylesheet" href="{{'/fontawesome/css/all.css'}}">
	<style>
		body::-webkit-scrollbar{
			width: 7px;
		}
		body::-webkit-scrollbar-thumb{
			background: #2196f3,
			border-radius: 101;
		}
	</style>
</head>
<body>

	<div class="row">
		@include('partials.navbar')
    	<div class="col s12 l2">
    		@include('partials.sidenav')
    	</div>

    	<div class="col s12 l10">
			@yield('contenido')
    	</div>
    </div>
	
	<script src="{{'/materialize/js/materialize.js'}}"></script>
	<script src="{{'/js/funciones.js'}}"></script>
	<script src="{{'/fontawesome/js/all.js'}}"></script>
	<script>
		M.AutoInit();
	</script>
</body>
</html>