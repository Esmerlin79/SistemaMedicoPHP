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

<div class="card">
    <div class="card-body">


        <div id="muestra">
            <table class="table table-light" id="muestra">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Motivo de visita</th>
                        <th>Receta</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach($visitas as $recet)


                    <tr>
                        <td>{{$recet->ID}}</td>
                        <td>{{$recet->Motivo}}</td>
                        <td>{{$recet->Receta}}</td>
                        <td>
                            <a type="button" name="imprimir" value="Imprimir" onclick="window.print();">🖨️Imprimir</a>
                           
                           
                           
                           
                           
                        </td>
                    </tr>


                    <!-- type="button" name="imprimir" value="Imprimir" onclick="window.print();" -->
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>



@endsection