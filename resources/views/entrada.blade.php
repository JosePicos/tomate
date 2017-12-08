@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Entrada de Lotes</div>

                <div class="panel-body">
                  <div class="form-group col-lg-4">
                    <label>Producto</label>
                      <select class="form-control" required>
                        <option value="">Seleccione un producto</option>
                        @foreach($productos as $producto)
                          <option value="{{ $producto->id }}">{{ $producto->descripcion }}</option>
                        @endforeach
                      </select>
                    </div>
                  <div class="form-group col-lg-4">
                    <label>Fecha de corte</label>
                    <input type="date" class="form-control">
                  </div>
                  <div class="form-group col-lg-4">
                    <label>Clasificación</label>
                      <select class="form-control">
                        @foreach($clasificaciones as $clasificacion)
                          <option value="{{ $clasificacion->id }}" >{{ $clasificacion->nombre }}</option>
                        @endforeach
                    </select>
                  </div>  
                  <div class="form-group col-lg-2">
                    <label></label>
                    <button type="submit" class=" form-control btn btn-success"><span class="glyphicon glyphicon-floppy-disk"> Guardar </span></button>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
