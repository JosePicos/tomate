@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Entrada de Lotes</div>

                <div class="panel-body">
                        <div class="form-group col-lg-2">
                    <label></label>
                    <button type="submit" class=" form-control btn btn-primary" data-toggle="modal" data-target="#buscarprod"><span class="glyphicon glyphicon-search"></span></button>
                  </div>
                  <div class="form-group col-lg-2">
                    <label>ID Producto</label>
                    <input class="form-control">
                  </div>
                  <div class="form-group col-lg-6">
                    <label>Descipción</label>
                    <input class="form-control">
                  </div>
                  <div class="form-group col-lg-4">
                    <label>Feccha de corte</label>
                    <input class="form-control">
                  </div>
                  <div class="form-group col-lg-4">
                    <label>Clasificación</label>
                      <select class="form-control">
                        <option value="Tacos" >Normal</option>
                        <option>Urgente</option>
                    </select>
                  </div>
                  <div class="form-group col-lg-4">
                    <label>Bodega</label>
                    <input class="form-control">
                  </div>
                  <div class="form-group col-lg-4">
                    <label>Ubicación</label>
                    <input class="form-control">
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

@include('productos.buscador');
@endsection
