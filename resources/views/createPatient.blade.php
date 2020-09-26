@extends('master')
@section('contenido')

<div class="container m-2">

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
            <h2>Pacientes guardados</h2>
        </div>
        <!--Button that triggers modal form-->
        <div class="col-md-4">
            <button type="button" class="btn btn-primary m-1 float-right" data-toggle="modal" data-target="#CreatePatient">
                Crear Nuevo
            </button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="text-ligth">
                <tr>
                    <td>
                        Nombre
                    </td>
                    <td>
                        Apellido
                    </td>
                    <td>
                        Cedula
                    </td>
                    <td>
                        Fecha de nacimiento
                    </td>
                    <td>
                        Tipo de sangre
                    </td>
                    <td>
                        Acciones
                    </td>
                </tr>
            </thead>
            <tbody>
                @foreach ($pacientes as $item)
                    <tr>
                        <td>
                            {{$item -> nombre}}
                        </td>
                        <td>
                            {{$item -> Apellido}}
                        </td>
                        <td>
                            {{$item -> Cedula}}
                        </td>
                        <td>
                            {{$item -> fecha_nacimiento}}
                        </td>
                        <td>
                            {{$item -> TIpo_Sangre}}
                        </td>
                        <td>
                            <!--Delete and edit buttons-->
                            <a href="/editp/{{$item ->Cedula}}" class="btn btn-warning">
                                ✏️
                            </a>
                            <a href="/deletep/{{$item ->Cedula}}" class="btn btn-danger">
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
          <h5 class="modal-title" id="exampleModalLabel">Crear Paciente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/createp" method="POST">
        <div class="modal-body">
          <div class="form-group">
             

              <input type="text" name="cedula" class="form-control" autofocus placeholder="Cedula">
          </div>
          {{--  
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre">
        </div>
        <div class="form-group">
            <input type="text" name="apellido" class="form-control" placeholder="Apellido">
        </div>
        <div class="form-group">
            <small>Fecha de nacimiento</small>
            <input type="date" name="fecha" class="form-control">
        </div>
        <div class="form-group">
            <small>Tipo de Sangre</small>
            <select type="text" name="tiposangre" class="form-control" placeholder="Cedula">
                <option value="o+">O+</option>
                <option value="o-">O-</option>
                <option value="a+">A+</option>
                <option value="a-">A-</option>
                <option value="b+">B+</option>
                <option value="b-">B-</option>
                <option value="AB-">AB-</option>
                <option value="AB+">AB+</option>
            
          
        </div>
        </select>--}}
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

@endsection
