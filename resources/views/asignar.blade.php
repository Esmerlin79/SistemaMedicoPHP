@extends('master')
@section('contenido')
    <div class="container">
        <div class=" text-center mt-5 ">
            <h1>Asignar Precio de consulta</h1>
        </div>
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                            <form method="POST" action="{{ route('costo.update', $data->Id) }}"  >
                                @if (session()->has("estatus"))
                                <div class="alert alert-primary">{{session("estatus")}}</div>
                                @endif
                                {{ csrf_field() }}
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group"> <label for="costo">Precio de consulta *</label> 
                                            <input id="costo" type="text" name="costo" class="form-control" value="{{old('costo')}}" required="required" > </div>
                                            {{$errors->first('costo')}}
                                       
                                       
                                    
                                        <div class="col-md-12">
                                            <input type="submit" class="btn btn-primary btn-send pt-2 btn-block " value="Registrar Precio"> </div>
                                    
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