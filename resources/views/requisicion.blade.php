@extends('layouts.app')
@section('content')
<div class="col-md-12 col-md-offset dark-grey">
      <div class="panel-body">
        <div class="container-fluid">
        <section class="container">
          <div class="container-page">        
            <div class="col-md-12">
              <h3 class="dark-grey">Registro Requisición</h3>
            <!-- FECHA NO EDITABLE -->
            <div class="form-group col-lg-4">
              <label>Fecha</label>
              <input type="date" class="form-control" readonly>
            </div>
            <div class="form-group col-lg-2">
              <label>Pioridad</label>
                <select class="form-control">
                  <option value="Tacos" >Normal</option>
                  <option>Urgente</option>
                </select>
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
            <div class="form-group col-lg-1">
              <label></label>
              <button type="submit" class=" form-control btn btn-primary" data-toggle="modal" data-target="#buscardir"><span class="glyphicon glyphicon-search"></span></button>
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
            <!--Producto -->
            <div class="form-group col-lg-4">
              <label>Producto</label>
              <select class="form-control">
                <option value="" >TomateBola</option>
                <option>Urgente</option>
                </select>
            </div>
             <div class="form-group col-lg-1">
              <label></label>
              <button type="submit" class=" form-control btn btn-primary" data-toggle="modal" data-target="#buscarprod"><span class="glyphicon glyphicon-search"></span></button>
            </div>

          <table class="table table-striped table-hover dark-grey">
                <thead>
                    <tr>
                       
                        <th>ID</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th><span class="glyphicon glyphicon-trash"></span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="activate">
                     
                        <td>1</td>
                        <td>Tomate Saladette</td>
                        <td><input></td>
                        <td><button type="submit" class=" form-control btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></td>
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
@include('direcciones.buscador');
@include('productos.buscador');  
@endsection
