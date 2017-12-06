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
                <div class="panel-heading">Productos </div>
                     <table class="table table-striped table-hover dark-grey">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descripción</th>
                        <th>Dias Madurez</th>
                        <th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevo"> Nuevo</button></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr class="activate">
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->dias_madurez }}</td>
                         <td class="col-check"><button type="submit" class=" form-control btn btn-primary" data-toggle="modal" data-target="#editar-{{ $producto->id }}" >Modificar</button></td>
                    </tr>
                    @include('productos.editar')
                    @endforeach
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('productos.nuevo')

@endsection

