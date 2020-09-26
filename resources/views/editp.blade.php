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
    <h2>Editar paciente</h2>
<form action="{{route('paciente.update',$paciente->Cedula)}}" method="POST">
        <div class="modal-body">
          <div class="form-group">
          <input type="text" value="{{$paciente->Cedula}}" name="cedula" class="form-control" autofocus placeholder="Cedula">
          </div>
          <div class="form-group">
          <input type="text" value="{{$paciente->nombre}}" name="nombre" class="form-control" placeholder="Nombre">
        </div>
        <div class="form-group">
            <input type="text" value="{{$paciente->Apellido}}" name="apellido" class="form-control" placeholder="Apellido">
        </div>
        <div class="form-group">
            <small>Fecha de nacimiento</small>
            <input type="date" value="{{$paciente->fecha_nacimiento}}" name="fecha" class="form-control">
        </div>
    <input type="hidden" value="{{$id}}" name="originalID">
        <div class="form-group">
            <small>Tipo de Sangre</small>
            <select type="text" value="{{$paciente->TIpo_Sangre}}" name="tiposangre" class="form-control" placeholder="Cedula">
                <option value="o+">O+</option>
                <option value="o-">O-</option>
                <option value="a+">A+</option>
                <option value="a-">A-</option>
                <option value="b+">B+</option>
                <option value="b-">B-</option>
                <option value="AB-">AB-</option>
                <option value="AB+">AB+</option>
            </select>
            {{csrf_field()}}
            {{method_field("put")}}
        </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Editar</button>
        </div>
        </form>
</div>
@endsection
