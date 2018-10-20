@extends('home')

@section('contenido')


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

<div class="row">
  <div class="col s12 m4 l3">
  </div>

  <div class="col s12 m8 l9">
    <div class="container">

      <h1 class="center-align green-text text-light">Bachi</h1>
      <br>
      <h4 class="center-align">E.E.S Nº. 9 "Maestro Sarmiento"</h4>
      <br><br>

      <div class="col s12">
        <div class="card horizontal">
          <div class="card-image">
            <img src="https://lorempixel.com/200/200/nature/6">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p><h3>1º Ciclo Basico</h3></p>
            </div>
            <div class="card-action">
              <a>3 Alumnos</a>
            </div>
          </div>
        </div>
      </div>
          
    </div>
  </div>

</div>

@endsection