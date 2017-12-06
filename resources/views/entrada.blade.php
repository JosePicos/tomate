@extends('layouts.app')
@section('content')
<div class="col-md-12 col-md-offset dark-grey">
      <div class="panel-body">
        <div class="container-fluid">
        <section class="container">
          <div class="container-page">        
            <div class="col-md-12">
              <h3 class="dark-grey">Entada de Lotes</h3>
                  <div class="form-group col-lg-1">
                    <label></label>
                    <button type="submit" class=" form-control btn btn-primary" data-toggle="modal" data-target="#buscarprod"><span class="glyphicon glyphicon-search"></span></button>
                  </div>
                  <div class="form-group col-lg-2">
                    <label>ID Producto</label>
                    <input type="" name="" class="form-control" id="" value="">
                  </div>
                  <div class="form-group col-lg-6">
                    <label>Descipción</label>
                    <input type="" name="" class="form-control" id="" value="">
                  </div>
                  <div class="form-group col-lg-2">
                    <label>Feccha de corte</label>
                    <input type="date" name="" class="form-control" id="" value="">
                  </div>
                  <div class="form-group col-lg-2">
                    <label>Clasificación</label>
                      <select type="uso" name="" class="form-control" id="" value="" >
                        <option value="Tacos" >Normal</option>
                        <option>Urgente</option>
                    </select>
                  </div>
                  <div class="form-group col-lg-4">
                    <label>Bodega</label>
                    <input type="" name="" class="form-control" id="" value="">
                  </div>
                  <div class="form-group col-lg-4">
                    <label>Ubicación</label>
                    <input type="" name="" class="form-control" id="" value="">
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('productos.buscador');
@endsection
