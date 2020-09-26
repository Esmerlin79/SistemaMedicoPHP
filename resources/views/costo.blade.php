@extends('master')
@section('contenido')
    
<div class="container">
    <h1>Asignar costo a consulta</h1>
    <table class="table">
        <thead>
            <tr>
            <th>Doctor Asignado</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Duracion</th>
            <th>Paciente Asignado</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                <td>{{$row->Doctor_Asigando}}</td>
                <td>{{$row->Fecha}}</td>
                <td>{{$row->Hora}}</td>
                <td>{{$row->Duracion}}</td>
                <td>{{$row->Paciente_asignado}}</td>
                <td><a href="{{route('costo.edit',$row->Id)}}">Asignar Costo</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection