@extends('master')

@section('contenido')
 <div class="container">
     <br>
     <br>

     <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"> MedicalSystem</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   
      <div class="modal-body mx-3">
        <form method="POST" action="{{ route('usuario.store') }}">
            {{ csrf_field() }}
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="nombre"  name="name" value="{{ old('name') }}" class="form-control validate">
 
          <label data-error="wrong" data-success="right" for="name">Nombre</label><br>
          @if ($errors->has('name'))
          <span class="help-block">
              <strong class="text-danger">{{ $errors->first('name') }}</strong>
          </span>
      @endif
        </div>
        
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <select class="form-control validate" name="role_id" id="role_id">
            <option>Elije un rol</option>
            <option value="1">Admin</option>
            <option value="2">Asistente</option>
            <option value="3">Medico</option>
          </select>
          <label data-error="wrong" data-success="right" for="role_id">Rol de usuario</label>
        </div>

        <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="email" id="email" name="email" value="{{ old('email') }}"  class="form-control validate">


            <label data-error="wrong" data-success="right" for="email">Email</label><br>
            @if ($errors->has('email'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('email') }}</strong>
            </span>
        @endif
          </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="password" name="password" class="form-control validate">

          <label data-error="wrong" data-success="right" for="password">password</label><br>
          
          @if ($errors->has('password'))
          <span class="help-block">
              <strong class="text-danger">{{ $errors->first('password') }}</strong>
          </span>
      @endif
        </div>

        <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>

            <label data-error="wrong" data-success="right" for="password_confirmation">Confirma tu password</label><br>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control validate">
            @if ($errors->has('password'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('password') }}</strong>
            </span>
        @endif
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
        </form>
        
      </div>
  
    </div>
  </div>
</div>
<div class="text-left" style="position: relative; color:black;">
    <h3>Registro de usuarios</h3>
    @if (session()->has("estatus"))
    <div class="alert alert-success">{{session("estatus")}}</div>
        @endif
</div>
<div style="position:absolute; top:118px; right:70px;"  >

  <a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Registrar nuevo usuario </a>
</div>
<table class="table" style="color: black;">

 </div>
 <thead>
    <tr>
        <th>Nombre</th>
        <th>Email</th>
      <th>Rol</th>
      <th>Acciones</th>
    </tr>
</thead>
<tbody style="color: black ;">
   
        @foreach ($data as $row)
        <tr>
    <td>{{$row->name}}</td>  
    <td>{{$row->email}}</td>

     <?php  if($row->role_id == 1) {?>
     <td>Admin</td>
     <?php } ?>

     
     <?php  if($row->role_id == 2) {?>
        <td>Asistente</td>
        <?php } ?>

        
     <?php  if($row->role_id == 3) {?>
        <td>Medico</td>
        <?php } ?>

        <td>

            <a href="{{route('usuario.edit',$row->id)}}" class="btn btn-primary" >Editar</a>

        </td>


</tr>
        @endforeach
      
  
</tbody>
</table>
@endsection
