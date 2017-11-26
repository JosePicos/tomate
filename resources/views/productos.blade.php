@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
         <div class="container-fluid">
        <div class="col-md-12 col-md-offset dark-grey">
            <div class="panel panel-default">
                <div class="panel-heading">Surtido de Requisicion </div>
                     <table class="table table-striped table-hover dark-grey">
                <thead>
                    <tr>
                       
                        <th>ID</th>
                        <th>Descripción</th>
                        <th>Dias Madurez</th>
                        <th>Status</th>
                        <th><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal"> Abrir modal</button></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="danger">
                     
                        <td>1</td>
                        <td>Tomate Cherry</td>
                        <td>20</td>
                        <td>Vigente</td>
                           <td class="col-check"><button type="submit" class=" form-control btn btn-primary">Modificar</button></td>
                       
                    </tr>
                    <tr class="activate">
                        
                         <td>2</td>
                        <td>Tomate Bola</td>
                        <td>15</td>
                        <td>Vigente</td>
                         <td class="col-check"><button type="submit" class=" form-control btn btn-primary">Modificar</button></td>
                      
                    </tr>
                    
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('productos.nuevo')
@endsection

