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

	@include('partials.navbar')

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