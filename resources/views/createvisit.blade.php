@extends('master')
@section('contenido')



<!-- Contenido-->
<div class="container">
<div class="row">
  <div class="col-lg-9">
    <h2 class="font-weight mb-0" style="margin-left:25px; ;">Visitas Registradas</h2>

  </div>
  <div class="col-lg-3 d-flex">
    <button class="btn btn-primary align-self-center" data-toggle="modal" data-target="#CreateVisit">Registar Nueva</button>
  </div>
</div>

<!-- Tablas con el contenido -->

<hr class="my-2" style=" border-top: 1px solid darkblue;">

<table class="table table-light">
  <thead class="thead-light">
    <tr>
      <th>#</th>
      <th>Fecha</th>
      <th>Motivo</th>
      <th>Comentario</th>
      <th>Proxima visita</th>
      <th>Receta</th>
      <th>Doctor</th>
      <th>Paciente</th>
      <th>Acciones</th>

    </tr>
  </thead>
  <tbody>
    @foreach($visitas as $paciente)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$paciente->Fecha}}</td>
      <td>{{$paciente->Motivo}}</td>
      <td>{{$paciente->Comentario}}</td>
      <td>{{$paciente->Proxima_visita}}</td>
      <td>{{$paciente->Receta}}</td>
      <td>{{$paciente->doctor_id}}</td>
      <td>{{$paciente->paciente_id}}</td>
      <td>
          
          <a class="btn btn-warning align-self-center" href="editv/{{$paciente ->ID}}" data-target="#EditVisit">✏️</a>
          
      
        <a href="deletev/{{$paciente ->ID}}" class="btn btn-danger">
          🗑️
        </a></td>
    </tr>
    @endforeach
  </tbody>

</table>

</div>


<div class="modal fade" id="CreateVisit" tabindex="-1" role="dialog" aria-labelledby="registroLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registroLabel">Registrar Visitas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form action="createv" method="Post">
        <div class="modal-body">
          <div class="form-group">
            <label for="Fecha" class="col-form-label">Fecha</label>
            <input required type="date" class="form-control" id="Fecha" name="Fecha">
          </div>
          <div class="form-group">
            <input required type="text" class="form-control" id="Comentario" name="Comentario" placeholder="Comentarios">
          </div>

          <div class="form-group">
            <input required type="text" class="form-control" id="Motivo" name="Motivo" placeholder="Motivo">
          </div>


          <div class="form-group">
            <input required type="text" class="form-control" id="Receta" name="Receta" placeholder="Receta">
          </div>

          <div class="form-group">
            <label for="Fecha" class="col-form-label">Proxima Visita</label>
            <input required type="date" class="form-control" name="Proxima_visita" id="Proxima_visita">
          </div>


          <div class="form-group">
            <label for="doctor_id" class="col-form-label">Doctor:</label>
            <select required  name="doctor_id" class="form-control" >
              
              @foreach ($doctor as $row)
            <option value="{{$row->id}}">{{$row->name}}</option>
             
              @endforeach
        
            </select>
          
          </div>

          <div class="form-group">
            <label for="paciente_id" class="col-form-label">Paciente:</label>
            <select  required  name="paciente_id" class="form-control" >
              @foreach ($pacientes as $item)
            <option value="{{$item->Cedula}}" >{{$item-> nombre}}</option>
                @endforeach
              
            </select>
            {{csrf_field()}}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Agregar</button>
          </div>
      </form>

    </div>

  </div>
</div>
</div>

</div>
</div>

</div>
@endsection