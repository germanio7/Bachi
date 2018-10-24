<nav class="hide-on-med-and-up light-green">
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Bachi</a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  </div>
</nav>

<ul class="sidenav light-green" id="mobile-demo">
  <li>
    <div class="user-view">
      <div class="background">
        <img src="{{'/img/BachiFondo.png'}}" width="300" height="auto">
      </div>
      <br><br><br><br>
    </div>
  </li>
  <li><a class="waves-effect" href="{{route('cursos.index')}}">Cursos</a></li>
  <li><a class="waves-effect" href="{{route('materias.index')}}">Materias</a></li>
  <li><a class="waves-effect" href="{{route('alumnos.index')}}">Alumnos</a></li>
  <li><a class="waves-effect" href="{{route('docentes.index')}}">Docentes</a></li>
  <li><a class="waves-effect" href="{{route('notas.index')}}">Calificaciones</a></li>
  <li><a class="waves-effect" href="{{route('asistencias.index')}}">Asistencias</a></li>
  <li><a class="waves-effect" href="{{route('padres.index')}}">Tutores</a></li>
</ul>

<ul id="slide-out" class="sidenav sidenav-fixed light-green">
  <li>
    <div class="user-view">
      <div class="background">
        <img src="{{'/img/BachiFondo.png'}}" width="300" height="auto">
      </div>
      <a href="#user"><img class="circle" src="{{'/img/user.png'}}"></a>
      <br><br><br>
    </div>
  </li>
  <li><a class="waves-effect" href="{{route('cursos.index')}}">Cursos</a></li>
  <li><a class="waves-effect" href="{{route('materias.index')}}">Materias</a></li>
  <li><a class="waves-effect" href="{{route('alumnos.index')}}">Alumnos</a></li>
  <li><a class="waves-effect" href="{{route('docentes.index')}}">Docentes</a></li>
  <li><a class="waves-effect" href="{{route('notas.index')}}">Calificaciones</a></li>
  <li><a class="waves-effect" href="{{route('asistencias.index')}}">Asistencias</a></li>
  <li><a class="waves-effect" href="{{route('padres.index')}}">Tutores</a></li>
</ul>