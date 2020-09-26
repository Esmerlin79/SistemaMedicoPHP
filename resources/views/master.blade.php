<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/styles1.css') }}" rel="stylesheet">
    <link href='{{asset("assets/lib/main.css")}}' rel='stylesheet' />
    <script src='{{asset("assets/lib/main.js")}}'></script>
    <title>MedicalSystem</title>
  </head>
  <body>
  <div class="d-flex">
  <div id="sidebar-container" class="bg-primary" >
   <div class="logo">
    <h4 class="text-light font-weight-bold">MedicalSystem</h4>

   </div>
   <div class="menu"> 
    <?php if(Auth::user()->role_id == 1) {?>
       
     
 
    <a href="/home" class="d-block text-light  p-3"><i class="icon ion-md-apps mr-2 lead"></i>Dashboard</a>
    <a href="/usuario" class="d-block text-light  p-3"><i class="icon ion-md-person mr-2 lead"></i>Usuarios</a>
    <a href="/datecalendar" class="d-block text-light  p-3"><i class = "icon ion-ios-bookmarks mr-2 lead" > </i>Calendario de citas</a>
    <a href="/costo" class="d-block text-light  p-3"><i class = "icon ion-md-clipboard mr-2 lead" > </i>Asignar Costo a consulta</a>


  


    <?php  }?>


    <?php if(Auth::user()->role_id ==2){ ?>
       


      <a href="/home" class="d-block text-light  p-3"><i class="icon ion-md-apps mr-2 lead"></i>Dashboard</a>
      <a href="/createPatient" class="d-block text-light  p-3"> <i class = "icon ion-ios-people mr-2 lead" > </i> </i>Pacientes</a>
      <a href="/cites" class="d-block text-light  p-3"><i class = "icon ion-md-clipboard mr-2 lead" > </i>Citas</a>
      <a href="/imprimirCita" class="d-block text-light  p-3"> <i class = "icon ion-ios-people mr-2 lead" > </i> </i>Imprimir Cita</a>
      <a href="/datecalendar" class="d-block text-light  p-3"><i class = "icon ion-ios-bookmarks mr-2 lead" > </i>Calendario de citas</a>
      <a href="/birthdays" class="d-block text-light  p-3"><i class = "icon ion-ios-calendar mr-2 lead" > </i>Cumpleaños pacientes</a>
      <a href="/paydates" class="d-block text-light  p-3"><i class = "icon ion-md-cash mr-2 lead" > </i>Registrar pago</a>
   <?php  }?>
   <?php if(Auth::user()->role_id ==3) { ?>

   <a href="/home" class="d-block text-light  p-3"><i class="icon ion-md-apps mr-2 lead"></i>Dashboard</a>
   <a href="/createVisita" class="d-block  text-light p-3" ><i class = "icon ion-ios-medkit mr-2 lead" ></i> Visitas al medico</a>

   <a href="/printrecet" class="d-block text-light  p-3"> <i class = "icon ion-ios-people mr-2 lead" > </i> </i>Imprimir receta</a>
<a href="/datecalendar" class="d-block text-light  p-3"><i class = "icon ion-ios-bookmarks mr-2 lead" > </i>Calendario de citas</a>


   <?php  }?>
   </div>
  </div>
  <div class="w-100">
  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
   <div class="container"> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <form class="form-inline position-relative my-2 d-inline-block">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
      <button class="btn btn-search position-absolute" type="submit"><i class="icon ion-md-search lead"></i></button>
    </form>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <?php if(Auth::user()->role_id == 1){  ?>
          <img src="{{ asset('img/general.jpg') }}" class="img-fluid rounded-circle avatar mr-2">
         <?php }?>

         <?php if(Auth::user()->role_id == 2){  ?>
          <img src="{{ asset('img/asis.jpg') }}" class="img-fluid rounded-circle avatar mr-2">
         <?php }?>

         <?php if(Auth::user()->role_id == 3){  ?>
          <img src="{{ asset('img/medico.png') }}" class="img-fluid rounded-circle avatar mr-2">
         <?php }?>
       {{Auth::user()->name}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
          <p style="color: black; margin-left:24px;">Logout</p>
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>
        </div>
      </li>
     
    </ul>
   
  </div>
</div>
</nav>
  
@yield('contenido')




</div>
</div>



 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
  
  <script>
  var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Admin', 'Secretario', 'Doctores','Pacientes'],
        datasets: [{
            label: 'Nuevos usuarios',
            backgroundColor: [
              '#12C9E5',
              '#12C9E5',
              '#12C9E5',
              '#111b54'
            
            ],
            maxBarThickness: 30,
            borderColor: 'rgb(255, 99, 132)',
            data: [50, 100, 150,200]
        }]
    },

    // Configuration options go here
    options: {}
});
  </script>
  </body>
</html>