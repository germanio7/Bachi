@extends('home')

@section('contenido')

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
            <div class="card horizontal hoverable">
              <div class="card-stacked">

                <div class="card-content">
                  <span id="bars{{$curso->id}}" data-id="{{$curso->id}}" style="display: inline;" class="card-title activator grey-text text-darken-4"><b>{{$curso->curso}} {{$curso->orientacion}}</b><i class="fas fa-bars fa-lg right"></i></span>
                  <span id="times<?php echo $curso->id ?>" data-id="{{$curso->id}}" style="display: none;" class="card-title activator grey-text text-darken-4"><b>{{$curso->curso}} {{$curso->orientacion}}</b><i class="fas fa-times fa-lg right"></i></span>
                </div>
                <div id="tabss{{$curso->id}}" data-id="{{$curso->id}}" style="display: none;">
                  <div class="card-action">
                    <div class="card-tabs">
                      <ul class="tabs tabs-fixed-width" id="tabs-swipe-demo">
                        <li class="tab"><a href="#materias{{$curso->id}}" class="green-text text-light-darken-2">Materias</a></li>
                        <li class="tab"><a href="#alumnos{{$curso->id}}" class="green-text text-light-darken-2 active">Alumnos</a></li>
                        <li class="tab"><a href="#docentes{{$curso->id}}" class="green-text text-light-darken-2">Docentes</a></li>
                      </ul>
                    </div>
                    <div class="card-content">
                      <div id="materias{{$curso->id}}">Materias</div>
                      <div id="alumnos{{$curso->id}}">
                        <table class="striped">
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
                      <div id="docentes{{$curso->id}}">Docentes</div>
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
  var inicio = true;
  $(document).on("click", "#bars"+{{$curso->id}}, function(){

      var id = $(this).data("id");
      desplegar(id);
      if (inicio == true) {
          var anterior = $(this).data("id");
          inicio = false;
      }
      var idanterior = anterior;
      if (inicio == false) {
        soltar(idanterior);
        inicio = true
      }
      console.log(id);
      console.log(idanterior);

  })
  $(document).on("click", "#times"+{{$curso->id}}, function(){

      var id = $(this).data("id");
      var idanterior = $(this).data("id");
      desplegar(id);
      soltar(idanterior);
  })
</script>
@endforeach()
<script src="{{'/js/funciones.js'}}"></script>

@endsection