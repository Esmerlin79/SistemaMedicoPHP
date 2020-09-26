@extends('master')
@section('contenido')
<div class="container m-2">

    <div class="col-md-10">
        <h2>Cumpleaños de pacientes</h2>
    </div>
    <form action="/getbirthdays" method="post">
        <div class="row">
                <div class="col-md-9">
                        <select name="birthdaymonth" autofocus class="form-control" id="mes">
                            <option value=1>Enero</option>
                            <option value=2>Febrero</option>
                            <option value=3>Marzo</option>
                            <option value=4>Abril</option>
                            <option value=5>Mayo</option>
                            <option value=6>Junio</option>
                            <option value=7>Julio</option>
                            <option value=8>Agosto</option>
                            <option value=9>Septiembre</option>
                            <option value=10>Octubre</option>
                            <option value=11>Noviembre</option>
                            <option value=12>Diciembre</option>
                        </select>
                </div>
                <div class="col-md-3">
                        <button  class=" btn btn-primary" type="submit">Buscar cumpleaños</button>
                </div>
                {{csrf_field()}}
        </div>
    </form>
@endsection
