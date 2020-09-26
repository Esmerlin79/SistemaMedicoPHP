@extends('master')
@section('contenido')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" >
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js" ></script>

<script>
    function imprim2() {
        var mywindow = window.open('', 'PRINT', 'height=400,width=600');
        mywindow.document.write('<html><head>');
        mywindow.document.write('<style>.table{width:100%;border-collapse:collapse;margin:16px 0 16px 0;}.table th{border:1px solid #ddd;padding:4px;background-color:#d4eefd;text-align:left;font-size:15px;}.table td{border:1px solid #ddd;text-align:left;padding:6px;}</style>');
        mywindow.document.write('</head><body >');
        mywindow.document.write(document.getElementById('muestra').innerHTML);
        mywindow.document.write('</body></html>');
        mywindow.document.close(); // necesario para IE >= 10
        mywindow.focus(); // necesario para IE >= 10
        mywindow.print();
        mywindow.close();
        return true;

    }
</script>
<div class="container m-2">

    <div class="row">
        <div class="col-md-8">
            <h2>Citas Pendientes</h2>
        </div>
        <!--Button that triggers modal form-->
        <div class="col-md-4">
         
        </div>
    </div>
    <div id="muestra">
    <div class="table-responsive">
        <table class="table table-hover" id="muestra">
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
                      
                            <a type="button" name="imprimir" value="Imprimir" onclick="window.print();">🖨️</a>

                            </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
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
            <input type="time" name="hora" class="form-control" placeholder="Hora">
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
@endsection