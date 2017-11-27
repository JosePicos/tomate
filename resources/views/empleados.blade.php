@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
         <div class="container-fluid">
        <div class="col-md-12 col-md-offset dark-grey">
            <div class="panel panel-default">
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
                <div class="panel-heading">Empleados</div>
                     <table class="table table-striped table-hover dark-grey">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Fecha Alta</th>
                        <th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#alta"> Alta</button></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleados as $empleado)
                    <tr class="danger">
                        <td>{{ $empleado->id }}</td>
                        <td>{{ $empleado->nombre }}</td>
                        <td>{{ $empleado->fecha_alta }}</td>
                        <td class="col-check"><button type="submit" class=" form-control btn btn-primary" data-toggle="modal" data-target="#editar-{{ $empleado->id }}" >Modificar</button></td>
                    </tr>
                    @include('empleado.editar')
                    @endforeach
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('empleado.nuevo')
@endsection
