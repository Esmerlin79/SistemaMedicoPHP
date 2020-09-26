@extends('master')
@section('contenido')
<div class="container " >
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-md-8">
            <h2>Citas Pendientes</h2>
        </div>
        <!--Button that triggers modal form-->
        <div class="col-md-4">
            <button type="button" class="btn btn-primary m-1 float-right" data-toggle="modal" data-target="#CreatePatient">
                Crear Nueva
            </button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="text-ligth">
                <tr>
                    <td>
                        Costo
                    </td>
                    <td>
                        Doctor
                    </td>
                    <td>
                        Paciente
                    </td>
                    <td>
                        Fecha
                    </td>
                    <td>
                        Hora
                    </td>
                    <td>
                        Duracion
                    </td>
                    <td>
                        ¿Completada?
                    </td>
                    <td>
                        Acciones
                    </td>
                </tr>
            </thead>
            <tbody>
                @foreach ($citas as $item)
                    <tr>
                        <td>
                            {{$item -> Costo}}
                        </td>
                        <td>
                            {{$item -> Doctor}}
                        </td>
                        <td>
                            {{$item -> Paciente}}
                        </td>
                        <td>
                            {{$item -> Fecha}}
                        </td>
                        <td>
                            {{$item -> Hora}}
                        </td>
                        <td>
                            {{$item -> Duracion}}
                        </td>
                        <td>
                            {{$item -> Completada}}
                        </td>
                        <td>
                            <!--Delete and edit buttons-->
                            <a href="/editc/{{$item ->Id}}" class="btn btn-warning">
                                ✏️
                            </a>
                            <a href="/deletec/{{$item ->Id}}" class="btn btn-danger">
                                🗑️
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!--Modal form-->
<div class="modal fade" id="CreatePatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear Cita</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/createc" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <small>Duracion</small>
              <input type="number" name="duracion" class="form-control" autofocus>
          </div>
          <div class="form-group">
            <small>Hora</small>
            <input type="number" name="hora" class="form-control" placeholder="Hora">
        </div>
        <div class="form-group">
            <small>Fecha</small>
            <input type="date" name="fecha" class="form-control">
        </div>
        <div class="form-group">
            <small>Doctor/a</small>
            <select type="text" name="doctor" class="form-control">
                @foreach ($doctores as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <small>Paciente</small>
            <select type="text" name="paciente" class="form-control">
                @foreach ($pacientes as $item)
                    <option value="{{$item->Cedula}}">{{$item->nombre}}</option>
                @endforeach
            </select>
        </div>
        {{csrf_field()}}
     
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Crear</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <br>
  <br>
@endsection
