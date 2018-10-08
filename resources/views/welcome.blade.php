<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E.E.S Nº. 9 "Maestro Sarmiento"</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="{{mix('css/home.css')}}">

    
</head>
<body>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper pink darken-1">
              <a href="/"><img class="circle" style="max-height:64px;" src="img/logo.jpg" alt=""><class="brand-logo"></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{route('asistencias.index')}}">Asistencias</a></li>
                <li><a href="{{route('notas.index')}}">Notas</a></li>
                <li><a href="{{route('alumnos.index')}}">Alumnos</a></li>
                <li><a href="{{route('padres.index')}}">Padres</a></li>
                <li><a href="{{route('cursos.index')}}">Cursos</a></li>
                <li><a href="{{route('materias.index')}}">Materias</a></li>
                <li><a href="{{route('docentes.index')}}">Docentes</a></li>
              </ul>
            </div>
          </nav>
    </div>

    <div class="row center">
      <blockquote>
        <h1>BIENVENIDO</h1>
      </blockquote>
    </div>

    <div class="parallax-container">
      <div class="parallax"><img class="circle" style="" src="img/parallax.JPG" alt=""></div>
    </div>

    <div class="container">
          @yield('contenido')
    </div>

    <div class="row center">
      <blockquote>
        <h1>E.E.S. Nº. 9 "Maestro Sarmiento"</h1>
      </blockquote>
    </div>
    

    <footer class="page-footer pink darken-1">
      <div class="footer-copyright">
        © 2018 Copyright Controller Group
      </div>
    </footer>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script>
        M.AutoInit();
    </script>

    <script src="{{mix('js/home.js')}}"></script>
    
</body>
</html>
