@extends('layouts.app')
@section('content')
<div class="col-md-12 col-md-offset dark-grey">
      <div class="panel-body">
        <div class="container-fluid">
        <section class="container">
          <div class="container-page">        
            <div class="col-md-12">
              <h3 class="dark-grey">Surtido Requisición</h3>
            <!-- FECHA NO EDITABLE -->
            <div class="form-group col-lg-2">
              <label>Folio</label>
              <input class="form-control" readonly>
            </div>
            <!-- FECHA NO EDITABLE -->
            <div class="form-group col-lg-4">
              <label>Fecha</label>
              <input type="date" class="form-control" readonly>
            </div>
            <div class="form-group col-lg-2">
              <label>Pioridad</label>
              <input class="form-control" readonly>  
            </div>
            <!-- DIRECCION -->
            <div class="form-group col-lg-12">
              <label>Dirección</label>
            </div>
            <!-- CODIGO POSTAL -->
            <div class="form-group col-lg-2">
              <label>Código Postal</label>
              <input class="form-control" readonly>
            </div>
            <!--Pais -->
            <div class="form-group col-lg-2">
              <label>País</label>
              <input class="form-control" readonly>
            </div>
            <!--Estado -->
            <div class="form-group col-lg-2">
              <label>Estado</label>
              <input class="form-control" readonly>
            </div>
            <!-- NUMERO INTERIOR -->
            <div class="form-group col-lg-2">
              <label>Municipio/Provincia</label>
              <input class="form-control" readonly>
            </div>
            <!--COLONIA -->
            <div class="form-group col-lg-6">
              <label>Colonia</label>
              <input class="form-control" readonly>
            </div>
            <!--Calle -->
            <div class="form-group col-lg-4">
              <label>Calle</label>
              <input class="form-control" readonly>
            </div>
            <!--Numero -->
            <div class="form-group col-lg-2">
              <label>Número</label>
              <input class="form-control" readonly>
            </div>
          <table class="table table-striped table-hover dark-grey">
                <thead>
                    <tr>
                       
                        <th>Lote ID</th>
                        <th>Product ID</th>
                        <th>Producto</th>
                        <th>Bodega</th>
                        <th>Ubicacion</th>
                        <th>Clasificación</th>                        
                </thead>
                <tbody>
                    <tr class="activate">
                     
                        <td>123</td>
                        <td>2</td>
                        <td>Tomate Bola</td>
                        <td>Mexico</td>
                        <td>M45</td>
                        <td>Mexico</td>
                    </tr>
                    
                </tbody>
            </table>
                </div>
                <div class="form-group col-lg-2">
              <label></label>
              <button type="submit" class="form-control btn btn-success">Guardar</button>
            </div>
            </div>
          </div>
      </div>
    </div> 
@endsection
