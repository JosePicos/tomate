@extends('layouts.app')
@section('content')
<div class="col-md-12 col-md-offset dark-grey">
      <div class="panel-body">
        <div class="container-fluid">
        <section class="container">
          <div class="container-page">        
            <div class="col-md-12">
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
              <h3 class="dark-grey">Registro Requisición</h3>
            <!-- FECHA NO EDITABLE -->
            <form name="requisicion" action="{{ route('Requisicion.store')}}" method="POST">
              {{ csrf_field() }}  
              <div class="form-group col-lg-2">
              <button type="submit" class=" form-control btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span></button>
            </div>
            <div class="form-group col-lg-4">
              <label>Fecha</label>
              <input type="date" class="form-control" value = "{{ $fecha }}" readonly>
            </div>
            <div class="form-group col-lg-2">
              <label>Pioridad</label>
                <select name="prioridad" class="form-control">  
                  <option value="1">Normal</option>
                  <option value="2">Urgente</option>
                </select>
            </div>
            <!-- DIRECCION -->
            <div class="form-group col-lg-12">
              <label>Dirección</label>
            </div>
            <!-- CODIGO POSTAL -->
            <div class="form-group col-lg-2">
              <label>Código Postal</label>
              <input name="codigo_postal" type="text" class="form-control" readonly required> 
            </div>
            <!--Pais -->
            <div class="form-group col-lg-2">
              <label>País</label>
              <input name="pais" type="text" class="form-control" readonly required>
            </div>
            <!--Estado -->
            <div class="form-group col-lg-2">
              <label>Estado/Provincia</label>
              <input name="estado" type="text" class="form-control" readonly required>
            </div>
            <!-- NUMERO INTERIOR -->
            <div class="form-group col-lg-2">
              <label>Municipio</label>
              <input name="municipio" type="text" class="form-control" readonly required>
            </div>
            <div class="form-group col-lg-1">
              <label></label>
              <button type="button" class=" form-control btn btn-primary" data-toggle="modal" data-target="#buscardir"><span class="glyphicon glyphicon-search"></span></button>
            </div>
            <!--COLONIA -->
            <div class="form-group col-lg-6">
              <label>Colonia</label>
              <input name="colonia" type="text" class="form-control" readonly required>
            </div>
            <!--Calle -->
            <div class="form-group col-lg-4">
              <label>Calle</label>
              <input name="calle" type="text" class="form-control" readonly required>
            </div>
            <!--Numero -->
            <div class="form-group col-lg-2">
              <label>Número</label>
              <input name="numero" type="text" class="form-control" readonly required >
            </div>
            <!--Producto -->
            <div class="form-group col-lg-1">
              <label>Producto</label>
              <button type="button" class=" form-control btn btn-primary" data-toggle="modal" data-target="#buscarprod"><span class="glyphicon glyphicon-search"></span></button>
            </div>
          <table name="productos" id="detalle" class="table table-striped table-hover dark-grey">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th><span class="glyphicon glyphicon-trash"></span></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </form>
  </section>
@include('direcciones.buscador');
@include('productos.buscador');  
@endsection
