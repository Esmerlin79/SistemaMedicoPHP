@extends('master')
@section('contenido')

<div class="container">
    

<h2>Selecione la acción</h2>

<hr><hr>
<div class="container">
    <div class="row">
    </div>    
   
     
<button style ="margin-left:10px"class="btn btn-primary align-self-center" data-toggle="modal" data-target="#EditVisit">Editar Registro
</button>
  

    
<a style="margin-left:20px;font-weight:bold" class="btn btn-warning align-self-center" href="/createVisita">Volver a Visitas</a>
</div>
</div>

<div class="modal fade" id="EditVisit" tabindex="-1" role="dialog" aria-labelledby="registrLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registrLabel">Editar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>



    <form action="{{route('visitas.update', $visitas->ID)}}" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label  for="Fecha" class="col-form-label">Fecha</label>
            <input required type="date" class="form-control" id="Fecha" name="Fecha" value="{{$visitas->Fecha}}">
          </div>
          <div class="form-group">
          <label class="col-form-label" for="Comentario">Comentario</label>  
          <input required type="text" class="form-control" id="Comentario" name="Comentario"  
        value="{{$visitas->Comentario}}">
          </div>

          <div class="form-group">
              <label class="col-form-label" for="Motivo">Motivo</label>
            <input required type="text" class="form-control" id="Motivo" name="Motivo" 
            value="{{$visitas->Motivo}}">
          </div>


          <div class="form-group">
              <label class="col-form-label" for="Receta">Receta</label>
            <input required type="text" class="form-control" id="Receta" name="Receta" 
            value="{{$visitas->Receta}}">
          </div>

          <div class="form-group">
            <label for="Proxima_visita" class="col-form-label">Proxima Visita</label>
            <input required type="date" class="form-control" name="Proxima_visita" id="Proxima_visita"
            value="{{$visitas->Proxima_visita}}">
          </div>


          <div class="form-group">
            <label for="doctor_id" class="col-form-label">Doctor:</label>
            <select required type="text" id="doctor_id" name="doctor_id" class="form-control" value="{{$visitas->doctor_id}}" placeholder="asdadadasasd">
              
              @foreach ($doctor as $row)
            <option value="{{$row->id}}">{{$row->name}}</option>
             
              @endforeach
        
            </select>
            </select>
          </div>
          <input type="hidden" value="{{$ID}}" name="originalID">
          <div class="form-group">
            <label for="paciente_id" class="col-form-label">Paciente:</label>
            <select required type="text" id="paciente_id" name="paciente_id" class="form-control" value="{{$visitas->paciente_id}}" placeholder="asdadadasasd">
              @foreach ($pacientes as $item)
            <option value="{{$item->Cedula}}" >{{$item-> nombre}}</option>
              @endforeach
            </select>
            {{csrf_field()}}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Editar</button>
          </div>
          {{method_field("put")}}
      </form>

    </div>

  </div>
</div> 
@endsection