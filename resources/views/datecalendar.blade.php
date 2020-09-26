@extends('master')
@section('contenido')

    <div id="calendar" class="m-4"></div>
    <!--Events-->
    <script>
        //Array thatt will contain the events
        const newEvents = [];

        //getting the events from database
        @foreach ($dates as $item) const v{{$loop->iteration}} = {
        title : 'Cita con {{$item->Paciente}}',
        start : '{{date("yy-m-d", strtotime($item->Fecha))}}'
        }
        // Pushing them into the array
        newEvents.push(v{{$loop->iteration}})
        @endforeach


        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');
          var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            height: "auto",
            events : newEvents
          });
          calendar.render();
        });


    </script>

@endsection
