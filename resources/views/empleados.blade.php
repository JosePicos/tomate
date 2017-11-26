@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
         <div class="container-fluid">
        <div class="col-md-12 col-md-offset dark-grey">
            <div class="panel panel-default">
                <div class="panel-heading">Empleados</div>
                     <table class="table table-striped table-hover dark-grey">
                <thead>
                    <tr>
                       
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Puesto</th>
                        <th>Fecha Alta</th>
                        <th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#alta"> Alta</button></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="danger">
                     
                        <td>1</td>
                        <td>Jose Luis</td>
                        <td>Administrador</td>
                        <td></td>
                           <td class="col-check"><button type="submit" class=" form-control btn btn-primary" data-toggle="modal" data-target="#editar">Modificar</button></td>
                       
                    </tr>
                    <tr class="activate">
                        
                         <td>2</td>
                        <td>Adan</td>
                        <td>Encargado de Bodega</td>
                        <td></td>
                          <td class="col-check"><button type="submit" class=" form-control btn btn-primary" data-toggle="modal" data-target="#editar">Modificar</button></td>
                      
                    </tr>
                    
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('empleado.nuevo')
@include('empleado.editar')
@endsection
