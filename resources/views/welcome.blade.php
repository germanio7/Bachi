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

    <div class="parallax-container">
        <div class="parallax"><img src="{{'/img/BachiFondo2.png'}}" width="auto" height="1080"></div>
      </div>

    <div class="container">

      <br><br>

      @foreach($cursos as $curso)

          <div class="col s12">
            <div class="card horizontal">
              <div class="card-stacked">

                <div class="card-content">
                  <span id="bars<?php echo $curso->id ?>" data-id="{{$curso->id}}" style="display: inline;" class="card-title activator grey-text text-darken-4"><b>{{$curso->curso}} {{$curso->orientacion}}</b><i class="fas fa-bars fa-lg right"></i></span>
                  <span id="times<?php echo $curso->id ?>" data-id="{{$curso->id}}" style="display: none;" class="card-title activator grey-text text-darken-4"><b>{{$curso->curso}} {{$curso->orientacion}}</b><i class="fas fa-times fa-lg right"></i></span>
                </div>
                <div id="tabss<?php echo $curso->id ?>" data-id="{{$curso->id}}" style="display: none;">
                  <div class="card-action">
                    <div class="card-tabs">
                      <ul class="tabs tabs-fixed-width">
                        <li class="tab"><a href="#materias<?php echo $curso->id ?>" class="green-text text-light-darken-2">Materias</a></li>
                        <li class="tab"><a href="#alumnos<?php echo $curso->id ?>" class="green-text text-light-darken-2 active">Alumnos</a></li>
                        <li class="tab"><a href="#docentes<?php echo $curso->id ?>" class="green-text text-light-darken-2">Docentes</a></li>
                      </ul>
                    </div>
                    <div class="card-content">
                      <div id="materias<?php echo $curso->id ?>">Materias</div>
                      <div id="alumnos<?php echo $curso->id ?>">
                        <table class="highlight">
                          <thead>
                            <tr>
                              <th>Cuil</th>
                              <th>Apellido</th>
                              <th>Nombre</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($alumnocurso as $ac)
                              @foreach($alumnos as $alumno)
                                @if($alumno->id == $ac->alumno_id && $curso->id == $ac->curso_id)
                                  <tr>
                                    <td>{{$alumno->cuil}}</td>
                                    <td>{{$alumno->apellido}}</td>
                                    <td>{{$alumno->nombre}}</td>
                                    <td>
                                      <div class="btn-group" role="group">
                                        <a class="btn blue" href="#"><i class="fas fa-print"></i></a>
                                        <a class="btn green" href="#"><i class="fas fa-pen"></i></a>
                                        <a class="btn red" href="#"><i class="fas fa-trash"></i></a>
                                      </div>
                                    </td>
                                  </tr>
                                @endif
                              @endforeach
                            @endforeach      
                          </tbody>
                        </table>
                      </div>
                      <div id="docentes<?php echo $curso->id ?>">Docentes</div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

      @endforeach
          
    </div>
  </div>

</div>

<script src="{{'/js/jquery.js'}}"></script>
@foreach($cursos as $curso)
<script>
  $(document).on("click", "#bars"+{{$curso->id}}, function(){

      var id = $(this).data("id");
      hola(id);

  })
  $(document).on("click", "#times"+{{$curso->id}}, function(){

      var id = $(this).data("id");
      hola(id);

  })
</script>
@endforeach()
<script src="{{'/js/funciones.js'}}"></script>

@endsection