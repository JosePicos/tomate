@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
         <div class="container-fluid">
        <div class="col-md-12 col-md-offset dark-grey">
            <div class="panel panel-default">
                <div class="panel-heading"> DIRECCIONES </div>
                <div class="panel-body">
                    <div class="form-group col-lg-2">
                    <button type="submit" class=" form-control btn btn-primary" data-toggle="modal" data-target="#nuevo">Nuevo</button>
                  </div>
                     <table class="table table-striped table-hover dark-grey">
                <thead>
                    <tr>
                        <th>Código Postal</th>
                        <th>País</th>
                        <th>Estado/Provincia</th>
                        <th>Colonia</th>
                        <th>Número</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($domicilios as $domicilio)
                    <tr class="activate">
                        <td>{{ $domicilio->codigo_postal }}</td>
                        <td>{{ $domicilio->pais }}</td>
                        <td>{{ $domicilio->estado }}</td>
                        <td>{{ $domicilio->colonia }}</td>
                        <td>{{ $domicilio->numero }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('direcciones.alta')
@endsection

