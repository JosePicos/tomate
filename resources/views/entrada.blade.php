@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @if(Session::has('mensaje'))
                    <div class="panel_mensajes">
                        <h3 class="mensajes"> 
                        {{Session::get('mensaje')}}
                        </h3>
                    </div>            
                @endif
                @if(Session::has('mensaje_error'))
                    <div class="panel_mensajes_error">
                        <h3 class="mensajes_error"> 
                        {{Session::get('mensaje_error')}}
                        </h3>
                    </div>            
                @endif
                <div class="panel-heading">Entrada de Lotes</div>
                <form action="{{ route('Bodega.store') }}" method="POST">
                  {{ csrf_field() }} 
                  <div class="panel-body">
                    <div class="form-group col-lg-4">
                      <label>Producto</label>
                        <select name="producto" class="form-control" required>
                          <option value="">Seleccione producto</option>
                          @foreach($productos as $producto)
                            <option value="{{ $producto->id }}">{{ $producto->descripcion }}</option>
                          @endforeach
                        </select>
                      </div>
                    <div class="form-group col-lg-4">
                      <label>Fecha de corte</label>
                      <input name="fecha_corte" type="date" class="form-control" onblur="validarFecha(this)" required>
                    </div>
                    <div class="form-group col-lg-4">
                      <label>Clasificación</label>
                        <select name="clasificacion" class="form-control" required>
                          <option value="">Seleccione clasificacion</option>
                          @foreach($clasificaciones as $clasificacion)
                            <option value="{{ $clasificacion->id }}" >{{ $clasificacion->nombre }}</option>
                          @endforeach
                      </select>
                    </div>  
                  <div class="form-group col-lg-2">
                    <label>Cantidad</label>
                    <input name="cantidad" type="number" min="1" class="form-control" required>
                  </div>
                  <div class="form-group col-lg-2">
                    <label></label>
                    <button type="submit" class=" form-control btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span></button>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
