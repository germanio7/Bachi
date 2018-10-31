@extends('home')

@section('contenido')

<br><br><br>

<div class="fixed-action-btn">
  <a class="btn-floating btn-large light-green darken-2">
    <i class="fas fa-plus fa-lg"></i></a>
  <ul>
    <li><a href="#curso" class="waves-effect waves-light btn modal-trigger btn-floating green"><i class="fas fa-folder-open"></i></a></li>
    <li><a href="#materia" class="waves-effect waves-light btn modal-trigger btn-floating red"><i class="fas fa-file"></i></a></li>
    <li><a href="{{'alumnos/create'}}" class="btn-floating blue"><i class="fas fa-user"></i></a></li>
  </ul>
</div>


<div class="container">
  <ul class="collapsible popout">
    @foreach($cursos as $curso)
      <li>
        <div class="collapsible-header hoverable"><h6><b>{{$curso->curso}} {{$curso->orientacion}}</b></h6></div>
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
                        <tr>
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
                        </tr>
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
                        @foreach($docentemateria as $dm)
                          @foreach($docentes as $docente)
                            @if($materia->id == $cm->materia_id && $curso->id == $cm->curso_id)
                              @if($materia->id == $dm->materia_id && $docente->id == $dm->docente_id)
                                <tr>
                                  <td>{{$materia->nombre}}</td>
                                      
                                        <td>{{$docente->apellido}} {{$docente->nombre}}</td>
                                  <td>
                                    <div class="btn-group" role="group">
                                      <a class="btn blue" href="#"><i class="fas fa-print fa-lg"></i></a>
                                      <a class="btn green" href="#"><i class="fas fa-pen fa-lg"></i></a>
                                      <a class="btn red" href="#"><i class="fas fa-trash fa-lg"></i></a>
                                    </div>
                                  </td>
                                </tr>
                              @endif
                            @endif
                          @endforeach
                        @endforeach
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

  <div id="curso" class="modal modal-fixed-footer">
    <div class="modal-content scrollbar">

      <div class="container">

        <blockquote><h4>Nuevo Curso</h4></blockquote>

        {!! Form::open(['action' => 'CursosController@store','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}

        <div class="row">
          <div class="input-field col s12">
            <input id="curso" type="text" class="validate" name="curso">
            <label for="curso">Curso</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input id="orientacion" type="text" class="validate" name="orientacion">
            <label for="orientacion">Orientación</label>
          </div>
        </div>

        <div class="input-field col s12">
          <select name="turno" class="input-field col s3">
            <option value="" disabled selected>Turno</option>
            <option value="Mañana">Mañana</option>
            <option value="Tarde">Tarde</option>
          </select>
        </div>
      </div>

    </div>

    <div class="modal-footer">
      {{ Form::submit('Guardar',(['class'=>'btn green'])) }}
    </div>

    {!! Form::close() !!}
  </div>

  <div id="materia" class="modal">
    <div class="modal-content scrollbar">

      <div class="container">

        <blockquote><h4>Nueva Materia</h4></blockquote>

        {!! Form::open(['action' => 'MateriasController@store','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}

        <div class="row">
          <div class="input-field col s12">
            <input id="nombre" type="text" class="validate" name="nombre">
            <label for="nombre">Nombre</label>
          </div>
        </div>

      </div>

    </div>

    <div class="modal-footer">
      {{ Form::submit('Guardar',(['class'=>'btn green'])) }}
    </div>

    {!! Form::close() !!}
  </div>

@endsection