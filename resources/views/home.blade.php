@extends('master')
@section('contenido')
 
<div id="content">
    <section class="py-3">
        <div class="container">
           <div class="row">
               <div class="col-lg-9">
               <h1 class="font-weight-bold mb-0">Bienvenido {{Auth::user()->name}}</h1>
                  <p class="lead text-muted">Revisa las ultimas actualizaciones</p>
             
                </div>
                <?php if(Auth::user()->role_id == 1) { ?>
              <div class="col-lg-3 d-flex">
                <a href="/systemreport" class="btn btn-primary w-100 align-self-center">Reporte del Sistema</a>
               </div>
              <?php  } ?>

      </div>      
      </div>
    </section>
    <section class="bg-mix"> 
  <div class="container">
      <div class="card rounded-0">
          <div class="card-body">
              <div class="row">
                  <div class="col-lg-3 col-md-6 d-flex stat my-3"> 
                      <div class="mx-auto">
                    <h6 class="text-muted">Pacientes</h6>
                    <h3 class="font-weight-bold"><?php echo $paciente; ?></h3>
                    <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Pacientes Registrados</h6>
                  </div>
                   </div>
                   <div class="col-lg-3 col-md-6 d-flex stat my-3"> 
                      <div class="mx-auto">
                    <h6 class="text-muted">Usuarios</h6>
                    <h3 class="font-weight-bold"><?php echo $data;  ?></h3>
                    <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> usuario registrado</h6>
                  </div>
                   </div>
                  <div class="col-lg-3 col-md-6 d-flex stat my-3"> 
                      <div class="mx-auto">
                  <h6 class="text-muted">Doctores</h6>
                      <h3 class="font-weight-bold">{{$doctor}}</h3>
                    <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Doctores Registrado</h6>
                  </div>
                   </div>
                  <div class="col-lg-3 col-md-6 d-flex my-3"> 
                      <div class="mx-auto">
                  <h6 class="text-muted">Ingresos</h6>
                      <h3 class="font-weight-bold">{{$cita}}</h3>
                    <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Dinero Recaudado</h6>
                  </div>
                   </div>
              </div>
          </div>
      </div>
  </div>
</section>
<section class="bg-grey">
<div class="container">
<div class="row">
 
<div class="col-lg-8 my-3">
<div class="card rounded-0">
<div class="card-header bg-light">
<h6 class="font-weight-bold mb-0">Numero de usuarios del sistema</h6>
</div>
<div class="card-body">
<canvas id="myChart"></canvas>
</div>
</div>
</div>

<div class="col-lg-4 my-3">
<div class="card rounded-0">
  <div class="card-header bg-light">
   <h6 class="font-weight-bold mb-0">Citas Pendientes</h6>
  </div>
  <div class="card-body pt-2">
  <div class="d-flex border-button py-2">

  <div class=" d-flex mr-3">
  <h2 class="align-self-center mb-0 "><i class="icon ion-md-timer"></i></h2> 
  </div>

  <div class="align-self-center ">
  <h6 class="d-inline-block mb-0">Martes</h6><span class="badge badge-success ml-2">12:00 PM</span>
  <small class="d-block text-muted">3 Horas</small>
  </div>

  </div>

  <!-- dos -->

  <div class="d-flex border-button py-2">

<div class=" d-flex mr-3">
<h2 class="align-self-center mb-0 "><i class="icon ion-md-timer"></i></h2> 
</div>

<div class="align-self-center ">
<h6 class="d-inline-block mb-0">Jueves</h6><span class="badge badge-success ml-2">8:00 AM</span>
<small class="d-block text-muted">5 Horas</small>
</div>

</div>

<!-- tres -->

<div class="d-flex border-button py-2 mb-3">

<div class=" d-flex mr-3 ">
<h2 class="align-self-center mb-0 "><i class="icon ion-md-timer"></i></h2> 
</div>

<div class="align-self-center ">
<h6 class="d-inline-block mb-0">Sabado</h6><span class="badge badge-success ml-2">1:00 PM</span>
<small class="d-block text-muted">1 Hora</small>
</div>

</div>
<div class="d-flex border-button py-2 mb-3">

<div class=" d-flex mr-3 ">
<h2 class="align-self-center mb-0 "><i class="icon ion-md-timer"></i></h2> 
</div>

<div class="align-self-center ">
<h6 class="d-inline-block mb-0">Lunes</h6><span class="badge badge-success ml-2">4:00 PM</span>
<small class="d-block text-muted">7 Hora</small>
</div>

</div>
<!-- sss -->

<div class="d-flex border-button py-2 mb-3">

<div class=" d-flex mr-3 ">
<h2 class="align-self-center mb-0 "><i class="icon ion-md-timer"></i></h2> 
</div>

<div class="align-self-center ">
<h6 class="d-inline-block mb-0">Sabado</h6><span class="badge badge-success ml-2">12:00 PM</span>
<small class="d-block text-muted">3 Hora</small>
</div>

</div>

<a href ="/cites" class="btn btn-primary w-100">Ver todas</a>
  </div>

</div>
</div>

</div>
</div>
</section>
</div>

@endsection