@extends('layouts.app')
@section('content')
<div class="col-md-12 col-md-offset dark-grey">
      <div class="panel-body">
        <div class="container-fluid">
        <section class="container">
          <div class="container-page">        
            <div class="col-md-12">
              <h3 class="dark-grey">Registro Requisicion</h3>
            <!-- Folio de la factura no editable -->
            <div class="form-group col-lg-2">
              <label>Folio</label>
              <input type="folio" name="" class="form-control" id="" value="">
            </div>
            <!-- FECHA NO EDITABLE -->
            <div class="form-group col-lg-4">
              <label>Fecha</label>
              <input type="feha" name="" class="form-control" id="" value="">
            </div>
            <div class="form-group col-lg-2">
              <label>Pioridad</label>
                <select type="uso" name="" class="form-control" id="" value="" >
                  <option value="Tacos" >Normal</option>
                  <option>Urgente</option>
                </select>
            </div>
            <!-- DIRECCION -->
            <div class="form-group col-lg-12">
              <label>Direccion</label>
            </div>
            <!-- CODIGO POSTAL -->
            <div class="form-group col-lg-2">
              <label>Codigo Postal</label>
              <input type="uso" name="" class="form-control" id="" value="">
            </div>
            <!--CALLE -->
            <div class="form-group col-lg-2">
              <label>Pais</label>
              <input type="uso" name="" class="form-control" id="" value="">
            </div>
            <!--COLONIA -->
            <div class="form-group col-lg-2">
              <label>Estado</label>
              <input type="uso" name="" class="form-control" id="" value="">
            </div>
            <!-- NUMERO INTERIOR -->
            <div class="form-group col-lg-2">
              <label>Municipio/Provincia</label>
              <input type="uso" name="" class="form-control" id="" value="">
            </div>
            <div class="form-group col-lg-1">
              <label></label>
              <button type="submit" class=" form-control btn btn-primary">Buscar</button>
            </div>
            </div>
            <!--COLONIA -->
            <div class="form-group col-lg-6">
              <label>Colonia</label>
              <input type="uso" name="" class="form-control" id="" value="">
            </div>
            <!--LOCALIDAD -->
            <div class="form-group col-lg-4">
              <label>Calle</label>
              <input type="uso" name="" class="form-control" id="" value="">
            </div>
            <!--ESTADO -->
            <div class="form-group col-lg-2">
              <label>Numero</label>
              <input type="uso" name="" class="form-control" id="" value="">
            </div>
            <!-- CODIGO POSTAL -->
            <div class="form-group col-lg-2">
              <label>Producto</label>
              <input type="uso" name="" class="form-control" id="" value="">
            </div>
             <div class="form-group col-lg-2">
              <label></label>
              <button type="submit" class=" form-control btn btn-primary">Buscar</button>
            </div>

            <div class="panel-heading">Surtido de Requisicion </div>
                     <table class="table table-striped table-hover dark-grey">
                <thead>
                    <tr>
                       
                        <th>ID</th>
                        <th>Descripcion</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="activate">
                     
                        <td>1</td>
                        <td>Jose Luis Osuna</td>
                        <td>Mexico</td>
                    </tr>
                    
                </tbody>
            </table>
                </div>
                <div class="form-group col-lg-2">
              <label></label>
              <button type="submit" class=" form-control btn btn-success">Guardar</button>
            </div>
            </div>
          </div>
      </div>
    </div>
@endsection
