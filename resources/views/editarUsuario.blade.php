@extends('master')
@section('contenido')
<div class="container"> 
    <div class=" text-center mt-5 ">
    <h1>Editar usuario existente</h1>
</div>
<div class="row ">
    <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
                <div class="container">
                    <form method="POST" action="{{ route('usuario.update', $data->id) }}"  >
                        @if (session()->has("estatus"))
                        <div class="alert alert-primary">{{session("estatus")}}</div>
                        @endif
                        {{ csrf_field() }}
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="name">Nombre *</label> 
                                    <input id="name" type="text" name="name" class="form-control" value="{{$data->name}}" required="required" data-error="Firstname is required."> </div>
                                    <p class="text-danger"{{$errors->first('name')}}></p>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="role_id">Rol de usuario *</label> 
                                    <select class="form-control validate"  name="role_id" id="role_id">
                                            <option>{{$data->role_id}}</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                          </select>
                                   
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group"> <label for="email">Email *</label> 
                                    <input id="email" type="email" name="email" class="form-control" value="{{$data->email}}" required="required" data-error="email is required."> </div>
                                    <p class="text-danger"{{$errors->first('email')}}></p>
                                </div>
                                </div>
                                
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group"> <label for="password">Password *</label> 
                                    <input id="password" type="text" name="password" class="form-control" required="required" data-error="password is required."> </div>
                                    <p class="text'danger">{{$errors->first('password')}}</p>
                                </div>
                                </div>
                                
                            </div>
                            
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-primary btn-send pt-2 btn-block " value="Editar"> </div>
                            
                            </div>
                        </div>
                        {{method_field("put")}}
                    </form>
                </div>
            </div>
        </div> <!-- /.8 -->
    </div> <!-- /.row-->
</div>
</div>

<style>
    

h1 {
    margin-bottom: 40px
}

label {
    color: #333
}

.btn-send {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    width: 80%;
    margin-left: 3px
}

.help-block.with-errors {
    color: #ff5050;
    margin-top: 5px
}

.card {
    margin-left: 10px;
    margin-right: 10px
}
</style>
@endsection