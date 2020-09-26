@extends('master')
@section('contenido')
    <div class="container "  style="width: 1050px; height: 600px; overflow-y: scroll;">
        <h2>
            Reporte de acciones del sistema
        </h2>
        <table class="table">
            <thead>
                <tr>
                    <td>
                        id
                    </td>
                    <td>
                        Comando
                    </td>
                    <td>
                        Tabla
                    </td>
                    <td>
                        Hora exacta
                    </td>
                    <td>
                        Registros afectados
                    </td>
                </tr>
            </thead>
            <tbody>
                @foreach ($logs as $item)
                    <tr>
                        <td>
                            {{$item->Id}}
                        </td>
                        <td>
                            {{$item->Command}}
                        </td>
                        <td>
                            {{$item->Tabla}}
                        </td>
                        <td>
                            {{$item->Timestamp}}
                        </td>
                        <td>
                            {{$item->RowsAffected}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
