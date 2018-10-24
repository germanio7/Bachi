@extends('home')

@section('contenido')

<br><br><br>

<div class="container">
  <ul class="collapsible popout">
    @foreach($cursos as $curso)
      <li>
        <div class="collapsible-header"><h6><b>{{$curso->curso}} {{$curso->orientacion}}</b></h6></div>
        <div class="collapsible-body">
          <div class="row">
            <div class="col s12">
              <ul class="tabs">
                <li class="tab col s6"><a class="active" href="#alumnos{{$curso->id}}">Alumnos</a></li>
                <li class="tab col s6"><a href="#materia{{$curso->id}}">Materia</a></li>
              </ul>
            </div>
            <div id="alumnos{{$curso->id}}" class="col s12">
              <table>
                <thead>
                  <tr>
                    <th>CUIL</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($alumnocurso as $ac)
                    @foreach($alumnos as $alumno)
                      @if($alumno->id == $ac->alumno_id && $curso->id == $ac->curso_id)
                        <td>{{$alumno->cuil}}</td>
                        <td>{{$alumno->apellido}}</td>
                        <td>{{$alumno->nombre}}</td>
                        <td>
                          <div class="btn-group" role="group">
                            <a class="btn blue" href="#"><i class="fas fa-print fa-lg"></i></a>
                            <a class="btn green" href="#"><i class="fas fa-pen fa-lg"></i></a>
                            <a class="btn red" href="#"><i class="fas fa-trash fa-lg"></i></a>
                          </div>
                        </td>
                      @endif
                    @endforeach
                  @endforeach  
                </tbody>
              </table>
            </div>
            <div id="materia{{$curso->id}}" class="col s12">
              <table>
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Docente</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($cursomateria as $cm)
                    @foreach($materias as $materia)
                      @if($materia->id == $cm->materia_id && $curso->id == $cm->curso_id)
                        <td>{{$materia->nombre}}</td>
                        @foreach($docentemateria as $dm)
                          @foreach($docentes as $docente)
                            @if($materia->id == $dm->materia_id && $docente->id == $dm->docente_id)
                              <td>{{$docente->apellido}} {{$docente->nombre}}</td>
                            @endif
                          @endforeach
                        @endforeach
                        <td>
                          <div class="btn-group" role="group">
                            <a class="btn blue" href="#"><i class="fas fa-print fa-lg"></i></a>
                            <a class="btn green" href="#"><i class="fas fa-pen fa-lg"></i></a>
                            <a class="btn red" href="#"><i class="fas fa-trash fa-lg"></i></a>
                          </div>
                        </td>
                      @endif
                    @endforeach
                  @endforeach  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </li>
    @endforeach
  </ul>  
</div>

@endsection