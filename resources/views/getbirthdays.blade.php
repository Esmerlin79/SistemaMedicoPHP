   @extends("master")
   @section('contenido')
   <div class="container m-2">
       <h2>
           Cumpleaños del mes seleccionado
       </h2>
         <table class="table">
        <thead>
            <tr>
                <td>
                    Nombre
                </td>
                <td>
                    Apellido
                </td>
                <td>
                    Dia de cumpleaños
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach($birthdays as $item)
            <h1 hidden>{{$birthday = strtotime($item->fecha_nacimiento)}}</h1>
                <tr>
                    <td>
                        {{$item->nombre}}
                    </td>
                    <td>
                        {{$item->Apellido}}
                    </td>
                    <td>
                        {{ $birthday= date("d-m", $birthday) }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
   </div>


@endsection
