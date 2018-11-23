<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<link rel="shortcut icon" href="{{'/img/icono.png'}}"/>
	<title>E.E.S Nº. 9 "Maestro Sarmiento"</title>
	<link rel="stylesheet" href="{{asset('/css/home.css')}}">
	<link rel="stylesheet" href="{{'/css/fontawesome.css'}}">
</head>
<body class="scrollbar">

	<div class="row">
		@include('partials.navbar')
    	<div class="col s12 l2">
    		@include('partials.sidenav')
    	</div>

    	<div class="col s12 l10">
			@yield('contenido')
    	</div>
    </div>
	
	<script src="{{asset('/js/home.js')}}"></script>
	<script src="{{asset('/js/app.js')}}"></script>
	<script src="{{'/js/fontawesome.js'}}"></script>
	<script>
		M.AutoInit();
	</script>
	<script>

		document.addEventListener('DOMContentLoaded', function() {
	    var elems = document.querySelectorAll('.fixed-action-btn');
	    var instances = M.FloatingActionButton.init(elems, {
	      hoverEnabled: false
	    });
	  });
      
	</script>
</body>
</html>