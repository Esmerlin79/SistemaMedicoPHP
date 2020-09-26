@extends('master')
@section('contenido')
<div class="container m-2">

    <div class="row">
        <div class="col-md-8">
            <h2>Citas por pagar</h2>
        </div>
        <!--Button that triggers modal form-->
        <div class="col-md-4">
            <button type="button" class="btn btn-primary m-1 float-right" data-toggle="modal" data-target="#paydate">
                Pagar
            </button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="text-ligth">
                <tr>
                    <td>
                        Id
                    </td>
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
                </tr>
            </thead>
            <tbody>
                @foreach ($dates as $item)
                    <tr>
                        <td>
                            {{$item -> Id}}
                        </td>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<!--Modal form-->
<div class="modal fade" id="paydate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pagar Cita</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/payedd" method="POST">
        <div class="modal-body">
        <div class="form-group">
            <small>Selecciona id de la cita</small>
            <select type="text" name="id" class="form-control">
                @foreach ($dates as $item)
                    <option value="{{$item->Id}}">{{$item->Id}}</option>
                @endforeach
            </select>
        </div>
        {{csrf_field()}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Pagar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection
